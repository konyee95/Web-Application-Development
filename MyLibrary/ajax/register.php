<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    /*
     * return an array that consists data
     */
    $return = [];

    $data = $_POST['data'];

    echo $data;
  } else {
    exit('ERROR 404! Something went wrong!');
  }
?>