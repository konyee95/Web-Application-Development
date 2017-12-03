<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $return = [];
    $return['action'] = "loadBookCategory";

    $data = json_decode($_POST["data"], false);
    $category = $data->category;

    $searchQuery = $con->prepare("SELECT * FROM books WHERE category=:category");
    $searchQuery->bindParam(':category', $category, PDO::PARAM_STR);
    $searchQuery->execute();

    $return['search_category'] = $category;

    if (!$searchQuery->rowCount() == 0) {
      $result = $searchQuery->fetchAll(PDO::FETCH_ASSOC);
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