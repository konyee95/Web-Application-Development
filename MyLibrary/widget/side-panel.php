<!DOCTYPE html>
<?php
  if (isset($_SESSION['student_index'])) {
    $student = new Student($_SESSION['student_index']);
  }
?>

  <div id="side-panel" class="side-panel">
    <div id="user-account-header" class="user-account-header">
      <?php
        if (isset($_SESSION['student_index'])) {
          echo "<p>$student->student_name</p>";
        } else {
          echo "<p>User Account</p>";
        }
      ?>
    </div>
    <div id="user-account-container" class="user-account-container">
      <?php
        if (isset($_SESSION['student_index'])) {
          echo "<p>Welcome back!</p>";
        } else {
          echo "<p>Log in your account to save your favourite books and read later!</p>";
          echo "<a class='button button-primary' href='javascript:dynamicPath();'>Login</a>";
        }
      ?>
    </div>
  </div>