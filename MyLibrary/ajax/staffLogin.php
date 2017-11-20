<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $return = [];
    $return['action'] = "login";

    $data = json_decode($_POST["data"], false);
    $staff_id = $data->staffId;
    $password = $data->password;

    /*
     * second parameter specify true because we want to pull user object from database, refer to Staff class
     */
    $staff_found = Staffs::Find($staff_id, true);

    if ($staff_found) {
      $staff_index = (int) $staff_found['staff_index'];
      $store_password = (string) $staff_found['password'];

      if ($store_password === $password) {
        $return['redirect'] = './staff-portal.php';
        $return['action_result'] = true;
        $_SESSION['staff_index'] = $staff_index;
      } else {
        $return['action_result'] = false;
        $return['error'] = "Invalid staff id/password combination";
        $return['p1'] = $store_password;
        $return['p2'] = $password;
      }
    } else {
      $return['action_result'] = false;
      $return['error'] = "This account does not exist. Please contact the library staff.";
    }

    /* always return encoded json! */
    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('ERROR 404! Something went wrong!');
  }
?>