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
    <title>Manage Users</title>
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
          <a class="button button-secondary" href="./staff-portal.php">Staff Portal</a>
          <button class="button button-secondary" onclick="logOut()">Sign Out</button>
        </div>
      </div>
    </div>

    <div class="about-us-container margin-leftright">
      <div class="about-us-header material-card">
        <h3>Manage MyLibrary Users</h3>
        <p>Sometimes our users forget their password and that's okay. Click on the reset password button to let them access their account back.</p>
        <p>Also, it is easy to remove users from database. But, make sure they have no reserved book before removing them.</p>
      </div>

      <div class="service-content">
        <table class="display-book-table">
          <tr class="display-book-table-row">
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Member Since</th>
            <th class="display-row-item-center">Reset Password</th>
            <th class="display-row-item-center">Delete Account</th>
          </tr>

          <?php
            $selectStudents = $con->prepare("SELECT student_id, student_name, reg_time FROM students");
            $selectStudents->execute();
            $result = $selectStudents->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $student) {
              $memberSince = new DateTime($student['reg_time']);
              echo "<tr class='display-book-table-row'>";
              echo "<td>{$student['student_id']}</td>";
              echo "<td>{$student['student_name']}</td>";
              echo "<td>{$memberSince->format('g:ia \o\n l jS F Y')}</td>";
              echo "<td class='display-row-item-center'><button class='button button-update' onclick='resetPasswordHelper(\"" . $student['student_id'] . "\")'>Reset</button></td>";
              echo "<td class='display-row-item-center'><button class='button button-delete' onclick='deleteUserHelper(\"" . $student['student_id'] . "\")'>Delete</button></td>";
              echo "</tr>";
            }
          ?>
        </table>
      </div>
    </div>
  </body>

  </html>