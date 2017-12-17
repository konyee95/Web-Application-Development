<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $return = [];
    $return['action'] = "deleteBookReservation";

    $data = json_decode($_POST["data"], false);
    $reserveIndex = $data->reserveIndex;

    if (!isset($_SESSION['staff_index'])) {
      $return['action_result'] = false;
      $return['action_result_code'] = 0;
      $return['redirect'] = './staff-login.php';
    } else {
        $checkIfReservationExists = $con->prepare("SELECT EXISTS (SELECT * FROM reserve WHERE reserve_index=:reserve_index)");
        $checkIfReservationExists->bindParam(":reserve_index", $reserveIndex);
        $checkIfReservationExists->execute();
        $hasReserveBool = $checkIfReservationExists->fetch()[0];

        // reservation exists, remove record from reserve table and insert into borrow table
        if ($hasReserveBool == "1") {
            $deleteReservation = $con->prepare("DELETE FROM reserve WHERE reserve_index=:reserve_index");
            $deleteReservation->bindParam(":reserve_index", $reserveIndex);
            $deleteReservation->execute();

            $return['action_result'] = true;
        } else {
            $return['action_result'] = false;
            $return['action_result_code'] = 1;
        }
        
    }

    /* always return encoded json! */
    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('ERROR 404! Something went wrong!');
  }
?>