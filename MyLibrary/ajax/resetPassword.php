<?php
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $return = [];
    $return['action'] = "resetPassword";

    $data = json_decode($_POST["data"], false);
    $student_id   = $data->studentID;
    $new_password = $data->newPassword;

    /* pull stored user data */
    $student_found = Student::Find($student_id, true);

    if ($student_found) {
      $password = password_hash($new_password, PASSWORD_DEFAULT);

      $resetPassword = $con->prepare("UPDATE students SET password=(:password) WHERE student_id=(:student_id)");
      $resetPassword->bindParam(':student_id', $student_id, PDO::PARAM_STR);
      $resetPassword->bindParam(':password', $password, PDO::PARAM_STR);
      
      if ($resetPassword->execute()) {
        $return['action_result'] = true;
      }
    }

    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('Something went wrong!');
  }
?>