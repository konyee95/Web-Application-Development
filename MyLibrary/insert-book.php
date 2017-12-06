<!DOCTYPE html>
<?php
    define('__CONFIG__', true);
    require_once "inc/config.php";
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
        <h3>Insert new books</h3>
        <p>New book records will be reflected to the library database immediately.</p>
      </div>

      <div class="services-content">
        <div id="service-item-1" class="services-item material-card">
          <div id="book-artwork"></div>
          <div class="service-item-text">
            <h3>Insert new book records</h3>
            <form id="insert-book" class="insert-book-form" name="insert-book">

              <div class="book-form-child-container">
                <div class="material-input-container">
                  <input id="book-id" type="text" class="material-input" placeholder="Book ID" required>
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>

                <div class="material-input-container">
                  <input id="title" class="material-input" placeholder="Book Title" required>
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>
              </div>

              <div class="book-form-child-container">
                <div class="material-input-container">
                  <input id="book-author" type="text" class="material-input" placeholder="Author" required>
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>

                <div class="material-input-container">
                  <input id="book-availability" class="material-input" placeholder="How many units?" required>
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>
              </div>

              <div class="book-form-child-container">
                <div class="material-input-container">
                  <input id="book-category" type="text" class="material-input" placeholder="Category" required>
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>

                <div class="material-input-container">
                  <input id="book-rating" class="material-input" placeholder="Overall Rating" required>
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>
              </div>

              <div class="book-form-child-container">
                <div class="material-input-container">
                  <input id="book-image-url" class="material-input" placeholder="Image URL" required>
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>

                <div class="material-input-container">
                  <input id="book-publisher-id" class="material-input" placeholder="Publisher ID" required>
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>
              </div>

              <div class="book-form-child-container">
                <div class="material-input-container">
                  <input id="book-published-year" class="material-input" placeholder="Published Year" required>
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>

                <div class="material-input-container">
                  <input id="book-online-reading-url" class="material-input" placeholder="Online Reading URL" required>
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>
              </div>

              <div class="book-form-child-container">
                <div class="material-input-container">
                  <textarea class="material-input" rows="5" cols="10" placeholder="Description"></textarea>
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>

                <div class="material-input-container">
                  <input id="book-physical-location" class="material-input" placeholder="Book Location" required>
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>
              </div>

              <div class="button-group">
                <button type="button" name="login_button" class="button button-primary" onclick="submitAuthForm()">Submit Book</button>
                <button type="button" name="login_button" class="button button-primary" onclick="submitAuthForm()">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>