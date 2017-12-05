<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $return = [];
    $return['action'] = "loadBook";

    $data = json_decode($_POST["data"], false);
    $bookID = $data->bookID;

    $loadBook = $con->prepare("SELECT * FROM books WHERE book_id = :bookID LIMIT 1");
    $loadBook->bindParam(':bookID', $bookID, PDO::PARAM_STR);
    $loadBook->execute();

    if (!$loadBook->rowCount() == 0) {
      $result = $loadBook->fetchAll(PDO::FETCH_ASSOC);
      $return['action_result'] = true;
      $return['data'] = $result; 
    } else {
      $return['action_result'] = false;
      $return['error'] = "No result found!";
    }

    /* always return encoded json! */
    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('ERROR 404! Something went wrong!');
  }
?>