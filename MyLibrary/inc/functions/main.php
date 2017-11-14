<?php
  function getSidePanelUsername() {
    if (isset($_SESSION['student_index'])) {
      $student = new Student($_SESSION['student_index']);
      define('__NAME__', $student->student_name);
    } else {
      define('__NAME__', "User Account");
    }
  }
?>