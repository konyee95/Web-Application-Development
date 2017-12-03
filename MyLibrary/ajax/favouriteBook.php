<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $return = [];
    $return['action'] = "favouriteBook";

    $data = json_decode($_POST["data"], false);
    $bookID = $data->bookID;
    $return['book_id'] = $bookID;

    if (!isset($_SESSION['student_index'])) {
      $return['action_result'] = false;
      $return['action_result_code'] = 0;
      $return['redirect'] = './login.php';
    } else {
      $student = new Student($_SESSION['student_index']);
      $student_id = $student->student_id;

      $favouriteBook = $con->prepare("INSERT INTO favourite(book_id, student_id_fk, reg_time) VALUES(:book_id, LOWER(:student_id), CURRENT_TIMESTAMP)");
      $favouriteBook->bindParam(':book_id', $bookID, PDO::PARAM_STR);
      $favouriteBook->bindParam(':student_id', $student_id, PDO::PARAM_STR);
      $favouriteBook->execute();

      $return['action_result'] = true;
    }

    /* always return encoded json! */
    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('ERROR 404! Something went wrong!');
  }
?>