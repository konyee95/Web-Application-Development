<?php
  
  if (!isset($_SESSION)) {
    session_start();
  }

  if (isset($_POST['submit'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    if ($_SESSION['username'] === "rex" AND $_SESSION['password'] === "1234") {
      header("Location: ./file-operation/write.php");
    } else {
      echo "Your username/password does not match";
    }

    session_destroy();
  }
?>

<html lang="en">
<head>
  <title>Session</title>
</head>
<body>
  <h3>Welcome. Please enter your username and password</h3>
  <form method="POST">
    Name: <input type="text" name="username"><br/>
    Password: <input type="password" name="password"><br/>
    <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html>