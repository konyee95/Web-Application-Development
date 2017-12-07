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
        <h3>Library books</h3>
        <p>All books in the library database are displayed here. Click on the Update or Delete button to manipulate the book records.</p>
      </div>

      <div class="service-content">
        <table class="display-book-table">
          <tr class="display-book-table-row">
            <th>BookID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th class="display-row-item-center">Availability</th>
            <th class="display-row-item-center">Update</th>
            <th class="display-row-item-center">Delete</th>
          </tr>

          <?php
            $selectBook = $con->prepare("SELECT book_id, title, author, category, availability FROM books ORDER BY book_id asc");
            $selectBook->execute();
            $result = $selectBook->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $book) {
              echo "<tr class='display-book-table-row'>";
              echo "<td>{$book['book_id']}</td>";
              echo "<td>{$book['title']}</td>";
              echo "<td>{$book['author']}</td>";
              echo "<td>{$book['category']}</td>";
              echo "<td class='display-row-item-center'>{$book['availability']}</td>";
              echo "<td class='display-row-item-center'><button class='button button-update' onclick='updateBookHelper(\"" . $book['book_id'] . "\")'>Update</button></td>";
              echo "<td class='display-row-item-center'><button class='button button-delete' onclick='deleteBookHelper(\"" . $book['book_id'] . "\")'>Delete</button></td>";
              echo "</tr>";
            }
          ?>
        </table>
      </div>
    </div>
  </body>

  </html>