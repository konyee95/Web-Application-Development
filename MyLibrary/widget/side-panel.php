<!DOCTYPE html>
<?php
  if (isset($_SESSION['student_index'])) {
    $student = new Student($_SESSION['student_index']);
  }
  echo "<div id='side-panel' class='side-panel'>";
  echo "<div id='user-account-header' class='user-account-header'>";
  if (isset($_SESSION['student_index'])) {
    echo "<p>$student->student_name</p>";
  } else {
    echo "<p>User Account</p>";
  }
  echo "</div>";
  echo "<div id='user-account-container' class='user-account-container'>";
  if (isset($_SESSION['student_index'])) {
    $checkReserveBook = $con->prepare("SELECT COUNT(*) FROM reserve WHERE student_id_fk=:student_id");
    $checkReserveBook->bindParam(':student_id', $student->student_id);
    $checkReserveBook->execute();
    $numOfBooks = $checkReserveBook->fetchColumn();

    if ($numOfBooks) {
      echo "<p>You have {$numOfBooks} book in reserved.</p>";
    } else {
      echo "<p>Welcome back!</p>";
    }

    echo "<div class='side-panel-item'>";
    echo "<img id='favourite-icon' />";
    echo "<a href='javascript:dynamicExploreBookPath();'>Explore Books</a>";
    echo "</div>";

    echo "<div class='side-panel-item'>";
    echo "<img id='heart-icon' />";
    echo "<a href='javascript:dynamicPath();'>My Profile</a>";
    echo "</div>";

    echo "<a class='button button-primary' href='javascript:logOut();'>Logout</a>";
  } else {
    echo "<p>Log in your account to save your favourite books and read later!</p>";
    echo "<a class='button button-primary' href='javascript:dynamicPath();'>Login</a>";
  }
  echo "</div>";
  echo "</div>";
?>