<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    /*
     * return an array that consists data
     */
    $return = [];
    $return['action'] = "registration";

    $data = json_decode($_POST["data"], false);
    $student_id = $data->studentID;
    $student_name = $data->studentName;

    /* check if user exist */
    $student_found = Student::Find($student_id);

    if ($student_found) {
      $return['error'] = "You already have an account";
      $return['is_logged_in'] = false;
      $return['action_result'] = false;
    } else {
      $password = password_hash($data->password, PASSWORD_DEFAULT);

      $addStudent = $con->prepare("INSERT INTO students(student_id, student_name, password) VALUES(LOWER(:student_id), :student_name, :password)");
      $addStudent->bindParam(':student_id', $student_id, PDO::PARAM_STR);
      $addStudent->bindParam(':student_name', $student_name, PDO::PARAM_STR);
      $addStudent->bindParam(':password', $password, PDO::PARAM_STR);
      $addStudent->execute();

      $student_index = $con->lastInsertId();

      $_SESSION['student_index'] = (int) $student_index;
      
      $return['redirect'] = './index.php?message=Welcome';
      $return['is_logged_in'] = true;
      $return['action_result'] = true;
    }

    /* always return encoded json! */
    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('ERROR 404! Something went wrong!');
  }
?>