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

    static function checkIfStaffIsLoggedIn() {
      if (isset($_SESSION['staff_index'])) {

      } else {
        header("Location: ./staff-login.php");
      }
    }

    static function ifStaffIsLoggedIn() {
      if (isset($_SESSION['staff_index'])) {
        header("Location: ./staff-portal.php");
      }
    }
  }
?>