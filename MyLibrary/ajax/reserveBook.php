<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $return = [];
    $return['action'] = "reserveBook";

    $data = json_decode($_POST["data"], false);
    $bookID = $data->bookID;
    $return['book_id'] = $bookID;

    if (!isset($_SESSION['student_index'])) {
      $return['action_result'] = false;
      $return['action_result_code'] = 0;
      $return['redirect'] = './login.php';
    } else {
      $isBookAvailable = Book::IsBookAvailable($bookID);

      if ($isBookAvailable) {
        $student = new Student($_SESSION['student_index']);
        $book = new Book($bookID);
        $student_id = $student->student_id;
        $noOfBookLeft = Filter::Int($book->availability);

        $reserveBook = $con->prepare("INSERT INTO reserve(book_id, student_id_fk, reg_time) VALUES(:book_id, LOWER(:student_id), CURRENT_TIMESTAMP)");
        $reserveBook->bindParam(':book_id', $bookID, PDO::PARAM_STR);
        $reserveBook->bindParam(':student_id', $student_id, PDO::PARAM_STR);

        if ($reserveBook->execute()) {
          $newBookUnit = Filter::Int($noOfBookLeft - 1);
          $updateBook = $con->prepare("UPDATE books SET availability=:unit WHERE book_id=:bookID");
          $updateBook->bindParam(':unit', $newBookUnit, PDO::PARAM_INT);
          $updateBook->bindParam(':bookID', $bookID, PDO::PARAM_STR);
          $updateBook->execute();

          if ($updateBook->rowCount()) {
            $return['action_result'] = true;
          }
        }

      } else {
        $return['action_result'] = false;
        $return['action_result_code'] = 1;
      }
    }

    /* always return encoded json! */
    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('ERROR 404! Something went wrong!');
  }
?>