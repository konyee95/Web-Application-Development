<?php
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $return = [];
    $return['action'] = "deleteBook";

    $data = json_decode($_POST["data"], false);
    $bookID   = $data->bookID;

    try {
      $deleteBook = $con->prepare("DELETE FROM books WHERE book_id=:book_id");
      $deleteBook->bindParam(':book_id', $bookID, PDO::PARAM_STR);

      if ($deleteBook->execute()) {
        $return['action_result'] = true;
      } else {
        $return['action_result'] = false;
      }
    } catch (PDOException $e) {
      echo $e->getMessage();
    }

    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('Something went wrong!');
  }
?>