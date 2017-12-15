<?php
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $return = [];
    $return['action'] = "deleteUser";

    $data = json_decode($_POST["data"], false);
    $studentID  = $data->studentID;

    try {
      $deleteUser = $con->prepare("DELETE FROM students WHERE student_id=:student_id");
      $deleteUser->bindParam(':student_id', $studentID, PDO::PARAM_STR);

      if ($deleteUser->execute()) {
        $return['action_result'] = true;
      } else {
        $return['action_result'] = false;
      }
    } catch (PDOException $e) {
      $return['action_result'] = false;
    }

    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('Something went wrong!');
  }
?>