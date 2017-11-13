<!DOCTYPE html>
<?php
    // define('__CONFIG__', true);
    require_once "inc/config.php";
    Page::checkIfStudentIsLoggedIn();

    /* if student is logged in, pulled student object to access later */
    $student = new Student($_SESSION['student_index']);
?>

<div id="side-panel" class="side-panel">
  <div id="user-account-header" class="user-account-header">
    <p>User Account<?php echo $student->student_name; ?></p>
  </div>
  <div id="user-account-container" class="user-account-container">
    <p>Log in your account to save your favourite books and read later!</p>
    <a class="button button-primary" href="./login.php">Login</a>
  </div>
</div>