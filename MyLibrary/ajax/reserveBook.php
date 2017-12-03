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
      
    }

    /* always return encoded json! */
    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('ERROR 404! Something went wrong!');
  }
?>