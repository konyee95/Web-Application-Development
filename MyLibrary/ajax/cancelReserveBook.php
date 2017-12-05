<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $data = json_decode($_POST["data"], false);
    $bookID = $data->bookID;

    // surely there is a user signed in if this file is ever called
    $student = new Student($_SESSION['student_index']);
    $student_id = $student->student_id;

    $book = new Book($bookID);
    $noOfBookLeft = Filter::Int($book->availability);
    $newBookUnit = Filter::Int($noOfBookLeft + 1);

    $return = [];
    $return['action'] = "cancelReserveBook";
    $return['book_id'] = $bookID;

    $cancelReservation = $con->prepare("DELETE FROM reserve WHERE book_id=:bookID AND student_id_fk=:student_id_fk");
    $cancelReservation->bindParam(':bookID', $bookID, PDO::PARAM_STR);
    $cancelReservation->bindParam(':student_id_fk', $student_id, PDO::PARAM_STR);
    
    if ($cancelReservation->execute()) {
      $updateBook = $con->prepare("UPDATE books SET availability=:unit WHERE book_id=:bookID");
      $updateBook->bindParam(':unit', $newBookUnit, PDO::PARAM_INT);
      $updateBook->bindParam(':bookID', $bookID, PDO::PARAM_STR);
      $updateBook->execute();

      $return['action_result'] = true;
    }

    /* always return encoded json! */
    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('ERROR 404! Something went wrong!');
  }
?>