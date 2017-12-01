<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $return = [];
    $return['action'] = "searchBook";

    $data = json_decode($_POST["data"], false);
    $keyword = $data->keyword;

    $searchQuery = $con->prepare("SELECT book_id, title, author, image_url FROM books WHERE title LIKE '%$keyword%' OR author LIKE '%$keyword%' LIMIT 0 , 10");
    $searchQuery->bindValue(1, '%$keyword%', PDO::PARAM_STR);
    $searchQuery->execute();

    $return['search_keyword'] = $keyword;

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