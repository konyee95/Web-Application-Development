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
          <a class="button button-secondary" href="./staff-portal.php">Staff Portal</a>
          <button class="button button-secondary" onclick="logOut()">Sign Out</button>
        </div>
      </div>
    </div>

    <div class="about-us-container margin-leftright">
      <div class="about-us-header material-card">
        <h3>Reserved book list</h3>
        <p>All reserved books in the library database are displayed here.</p>
      </div>

      <div class="service-content">
        <table class="display-book-table">
          <tr class="display-book-table-row">
            <th>BookID</th>
            <th>BookTitle</th>
            <th>StudentID</th>
            <th>StudentName</th>
            <th>Date & Time </th>
            <th class="display-row-item-center">Approval</th>
            <th class="display-row-item-center">Delete</th>
          </tr>

          <?php
            $selectBook = $con->prepare("SELECT reserve.reserve_index, reserve.book_id, reserve.student_id_fk, reserve.reg_time, students.student_name, books.title
            FROM reserve INNER JOIN books
            ON reserve.book_id = books.book_id INNER JOIN students
            ON reserve.student_id_fk= students.student_id
            ORDER BY reserve.book_id asc;");
            $selectBook->execute();
            $result = $selectBook->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $reserve) {
              echo "<tr class='display-book-table-row'>";
              echo "<td>{$reserve['book_id']}</td>";
              echo "<td>{$reserve['title']}</td>";
              echo "<td>{$reserve['student_id_fk']}</td>";
              echo "<td>{$reserve['student_name']}</td>";
              echo "<td>{$reserve['reg_time']}</td>";
              echo "<td class='display-row-item-center'><button class='button button-update' onclick='approveBookReservation(\"" . $reserve['reserve_index'] . "\")'>Approve</button></td>";
              echo "<td class='display-row-item-center'><button class='button button-delete' onclick='deleteBookReservation(\"" . $reserve['reserve_index'] . "\")'>Delete</button></td>";
              echo "</tr>";
            }
          ?>
        </table>
      </div>
    </div>
  </body>

  </html>