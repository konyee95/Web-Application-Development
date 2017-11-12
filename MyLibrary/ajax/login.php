<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    /*
     * return an array that consists data
     */
    $return = [];
    $return['action'] = "login";

    $data = json_decode($_POST["data"], false);
    $student_id = $data->studentID;
    $password = $data->password;

    /*
     * second parameter specify true because we want to pull user object from database, refer to Student class
     */
    $student_found = Student::Find($student_id, true);

    if ($student_found) {
      $student_index = (int) $student_found['student_index'];
      $hash = (string) $student_found['password'];

      if (password_verify($password, $hash)) {
        $return['redirect'] = './profile.php';
        $return['action_result'] = true;
        $_SESSION['student_index'] = $student_index;
      } else {
        $return['action_result'] = false;
        $return['error'] = "Invalid student id/password combination";
      }
    } else {
      $return['action_result'] = false;
      $return['error'] = "You do not have an account. <a href='./register.php'>Create one now?</a>";
    }

    /* always return encoded json! */
    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('ERROR 404! Something went wrong!');
  }
?>