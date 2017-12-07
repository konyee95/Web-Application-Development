<!DOCTYPE html>
<?php
    define('__CONFIG__', true);
    require_once "inc/config.php";

    // make sure staff is logged in first, otherwise anonymous user can do shit
    Page::checkIfStaffIsLoggedIn();

    /* if staff is logged in, pulled student object to access later */
    $staff = new Staffs($_SESSION['staff_index']);

    $base64Data = $_GET['data'];
    $decodedData = base64_decode($base64Data);
    $data = json_decode($decodedData, true);
    $bookID = $data['bookID'];

    $book = new Book($bookID);
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
        <h3>Update book records <?php echo $bookID ?></h3>
        <p>Updated book records will be reflected to the library database immediately.</p>
      </div>

      <div class="services-content">
        <div id="service-item-1" class="services-item material-card">
          <div id="book-artwork"></div>
          <div class="service-item-text">
            <h3>Update book records</h3>
            <form id="insert-book" class="insert-book-form" name="insert-book">

              <div class="book-form-child-container">
                <div class="material-input-container">
                  <input id="book-id" type="text" class="material-input" placeholder="Book ID" required disabled value="<?php echo $bookID ?>">
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>

                <div class="material-input-container">
                  <input id="book-title" type="text" class="material-input" placeholder="Title" required value="<?php echo $book->title ?>">
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>
              </div>

              <div class="book-form-child-container">
                <div class="material-input-container">
                  <input id="book-author" type="text" class="material-input" placeholder="Author" required value="<?php echo $book->author ?>">
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>

                <div class="material-input-container">
                  <input id="book-availability" type="number" class="material-input" placeholder="How many units?" required value="<?php echo $book->availability ?>">
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>
              </div>

              <div class="book-form-child-container">
                <div class="material-input-container">
                  <input id="book-category" type="text" class="material-input" placeholder="Category" required value="<?php echo $book->category ?>">
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>

                <div class="material-input-container">
                  <input id="book-rating" type="number" class="material-input" placeholder="Overall Rating" required value="<?php echo $book->rating ?>">
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>
              </div>

              <div class="book-form-child-container">
                <div class="material-input-container">
                  <input id="book-publisher-id" type="text" class="material-input" placeholder="Publisher ID" required value="<?php echo $book->publisher_id ?>">
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>

                <div class="material-input-container">
                  <input id="book-published-year" type="number" class="material-input" placeholder="Published Year" required value="<?php echo $book->published_year ?>">
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>
              </div>

              <div class="book-form-child-container">
                <div class="material-input-container">
                  <input id="book-image-url" type="text" class="material-input" placeholder="Image URL" required value="<?php echo $book->image_url ?>">
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>

                <div class="material-input-container">
                  <input id="book-online-reading-url" type="text" class="material-input" placeholder="Online Reading URL" required value="<?php echo $book->online_reading_url ?>">
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>
              </div>

              <div class="book-form-child-container">
                <div class="material-input-container">
                  <input id="book-no-of-times" type="text" class="material-input" rows="1" placeholder="Borrow frequency" required value="<?php echo $book->no_of_times ?>">
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>

                <div class="material-input-container">
                  <input id="book-physical-location" type="text" class="material-input" placeholder="Book Location" required value="<?php echo $book->physical_location ?>">
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>
              </div>

              <div class="book-form-child-container">
                <div class="material-input-container">
                  <textarea id="book-description" type="text" class="material-input" rows="5" placeholder="Description">
                    <?php echo $book->description ?>
                  </textarea>
                  <span class="material-input-highlight"></span>
                  <span class="material-input-bar"></span>
                  <label class="material-input-label"></label>
                </div>
              </div>

              <div class="button-group">
                <button type="button" name="login_button" class="button button-primary" onclick="updateBook()">Update Book</button>
                <button type="button" name="login_button" class="button button-primary" onclick="cancelInsertBook()">Cancel</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>