<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $return = [];
    $return['action'] = "readBook";

    $data = json_decode($_POST["data"], false);
    $bookID = $data->bookID;

    if (!isset($_SESSION['student_index'])) {
      $return['action_result'] = false;
      $return['action_result_code'] = 0;
      $return['redirect'] = './login.php';
    } else {
      $student = new Student($_SESSION['student_index']);
      $book = new Book($bookID);
      $student_id = $student->student_id;

      $hasUserReadThis = $con->prepare("SELECT EXISTS (SELECT * FROM history WHERE student_id_fk=:studentID AND book_id=:bookID)");
      $hasUserReadThis->bindParam(':studentID', $student_id, PDO::PARAM_STR);
      $hasUserReadThis->bindParam(':bookID', $bookID, PDO::PARAM_STR);
      $hasUserReadThis->execute();
      $readStatus = $hasUserReadThis->fetch()[0];

      if ($readStatus == '0') {
        $readBook = $con->prepare("INSERT INTO history(book_id, student_id_fk, reg_time) VALUES(:book_id, LOWER(:student_id), CURRENT_TIMESTAMP)");
        $readBook->bindParam(':book_id', $bookID, PDO::PARAM_STR);
        $readBook->bindParam(':student_id', $student_id, PDO::PARAM_STR);
        $readBook->execute();
      } else {
        $updateHistory = $con->prepare("UPDATE history SET reg_time=CURRENT_TIMESTAMP WHERE student_id_fk=:student_id AND book_id=:book_id");
        $updateHistory->bindParam(':student_id', $student_id, PDO::PARAM_STR);
        $updateHistory->bindParam(':book_id', $bookID, PDO::PARAM_STR);
        $updateHistory->execute();
      }

      $return['action_result'] = true;
      $return['redirect'] = $book->online_reading_url;
    }

    /* always return encoded json! */
    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('ERROR 404! Something went wrong!');
  }
?>