<?php
  if (!defined('__CONFIG__')) {
    exit('You do not have a config file');
  }

  /*
   * check if student is logged in
   */
  class Page {
    static function checkIfStudentIsLoggedIn() {
      if (isset($_SESSION['student_index'])) {

      } else {
        header("Location: ./login.php");
      }
    }

    static function ifStudentIsLoggedIn() {
      if (isset($_SESSION['student_index'])) {
        header("Location: ./profile.php");
      }
    }
  }
?>