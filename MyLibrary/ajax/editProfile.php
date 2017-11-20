<?php
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $return = [];
    $return['action'] = "editProfile";

    $data = json_decode($_POST["data"], false);
    $student_id   = $data->studentID;
    $student_name = $data->studentName;
    $old_password = $data->oldPassword;
    $new_password = $data->newPassword;

    /* pull stored user data */
    $student_found = Student::Find($student_id, true);

    if ($student_found) {
      if (empty($old_password) || empty($new_password)) {
        /* only update name */
        $updateProfile = $con->prepare("UPDATE students SET student_name=(:student_name) WHERE student_id=(:student_id)");
        $updateProfile->bindParam(':student_id', $student_id, PDO::PARAM_STR);
        $updateProfile->bindParam(':student_name', $student_name, PDO::PARAM_STR);
        $updateProfile->execute();

        $return['action_result'] = true;
        $return['redirect'] = "./edit-profile.php";
      } else {
        $hash = (string) $student_found['password'];
        if (password_verify($old_password, $hash) === false) {
          $return['action_result'] = false;
          $return['error'] = "Your old password is incorrect";
        } else {
          $password = password_hash($new_password, PASSWORD_DEFAULT);

          $updateProfile = $con->prepare("UPDATE students SET student_name=(:student_name), password=(:password) WHERE student_id=(:student_id)");
          $updateProfile->bindParam(':student_id', $student_id, PDO::PARAM_STR);
          $updateProfile->bindParam(':student_name', $student_name, PDO::PARAM_STR);
          $updateProfile->bindParam(':password', $password, PDO::PARAM_STR);
          $updateProfile->execute();

          $return['action_result'] = true;
          $return['redirect'] = "./edit-profile.php";
        }
      }
    }

    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('Something went wrong!');
  }
?>