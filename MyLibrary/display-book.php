<!DOCTYPE html>
<?php
    define('__CONFIG__', true);
    require_once "inc/config.php";

    // make sure staff is logged in first, otherwise anonymous user can do shit
    Page::checkIfStaffIsLoggedIn();

    /* if staff is logged in, pulled student object to access later */
    $staff = new Staffs($_SESSION['staff_index']);
?>
  <html>

  <head>
    <title>Profile</title>
    <?php require_once "inc/general-config.php" ?>
  </head>

  <body onload="init()">
    <div id="navigation">
      <div class="auth-nav-header">
        <a class="site-title" href="./index.php">MyLibrary</a>
      </div>
    </div>

    <div class="auth-container-header some-shadow">
      <img src="./image/empty-avatar.png" class="user-avatar" />
      <div class="profile-content-container">
        <h2 class="profile-user-name">
          <?php echo $staff->staff_name; ?>
        </h2>
        <h4 class="profile-user-id">Staff Id:
          <?php echo strtoupper($staff->staff_id); ?>
        </h4>
        <div class="profile-content-button-container">
          <button class="button button-secondary" onclick="logOut()">Sign Out</button>
        </div>
      </div>
    </div>

    <div class="about-us-container margin-leftright">
      <div class="about-us-header material-card">
        <h3>Library books</h3>
        <p>All books in the library database are displayed here.</p>
      </div>
    </div>
  </body>

  </html>