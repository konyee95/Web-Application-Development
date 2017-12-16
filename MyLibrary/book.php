<!DOCTYPE html>
<?php
  define('__CONFIG__', true);
  require_once "inc/config.php";

  // get data
  $base64Data = $_GET['data'];
  $decodedData = base64_decode($base64Data);
  $data = json_decode($decodedData, true);
  $book = $data['data'][0];

  if (isset($_SESSION['student_index'])) {
    $student = new Student($_SESSION['student_index']);

    // check whether this book has been reserved by current user
    $checkUserHasReserved = $con->prepare("SELECT EXISTS (SELECT * FROM reserve WHERE student_id_fk=:student_id_fk AND book_id=:bookID)");
    $checkUserHasReserved->bindParam(':student_id_fk', $student->student_id, PDO::PARAM_STR);
    $checkUserHasReserved->bindParam(':bookID', $book['book_id'], PDO::PARAM_STR);
    $checkUserHasReserved->execute();
    $hasUserReserved = $checkUserHasReserved->fetch()[0];

    // check whether student has favourite this book or now
    $checkUserHasFavourite = $con->prepare("SELECT EXISTS (SELECT * FROM favourite WHERE student_id_fk=:studentID AND book_id=:bookID)");
    $checkUserHasFavourite->bindParam(':studentID', $student->student_id, PDO::PARAM_STR);
    $checkUserHasFavourite->bindParam(':bookID', $book['book_id'], PDO::PARAM_STR);
    $checkUserHasFavourite->execute();
    $favStatus = $checkUserHasFavourite->fetch()[0];
  } else {
    $favStatus = false;
    $hasUserReserved = 0;
  }
?>
  <html>

  <head>
    <title>Explore</title>
    <?php require_once "inc/general-config.php" ?>
  </head>

  <body onload="init()">
    <div id="main-container">
      <?php include_once "./widget/side-panel.php" ?>

      <div id="navigation" class="some-shadow">
        <ul>
          <li>
            <a href="./index.php">HOME</a>
          </li>
          <li>
            <a href="./about-us.php">ABOUT US</a>
          </li>
          <li>
            <a href="./explore.php">EXPLORE</a>
          </li>
          <li>
            <a href="./profile.php">PROFILE</a>
          </li>
        </ul>

        <div id="search-container" class="search-container">
          <?php include_once "./widget/search-form.php" ?>
          <div id="hamburger-menu" class="hamburger-container" onclick="hamburgerMenu(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
        </div>
      </div>

      <div class="book-container sticky-header-padding">
        <div class="book-image-container">
          <?php echo "<img src={$book['image_url']} height='100%'>"; ?>
        </div>
        <div class="book-content-container">
          <div class="book-title-container ">
            <h1>
              <?php echo $book['title']; ?>
            </h1>
            <p>by
              <?php echo $book['author']; ?>
            </p>
            <p>
              <?php 
                echo $book['category'];
                echo "&nbsp";
                for ($x = 0; $x < intval($book['rating']); $x++) {
                  echo "<img src='./image/star.svg' alt='rating-star' style='position:relative;top:4px;'>";
                }
              ?>
            </p>
            <p>
              <?php 
                $location = explode(" ", $book['physical_location']);
                echo "Located at Floor {$location[0]}, Rack {$location[1]}, Row {$location[2]}";
              ?>
            </p>
            <p>
              <?php echo $book['description']; ?>
            </p>
          </div>

          <div class="book-action-container">
            <div class="book-button-container">
              <button 
                type="button" 
                name="reserve_book_button" 
                class="button button-primary" 
                onclick="reservationHandler('<?php echo $book['book_id'] ?>', '<?php echo $hasUserReserved ?>')">
                <?php
                  if ($hasUserReserved) {
                    echo "Reserved";
                  } else {
                    if (Book::IsBookAvailable($book['book_id'])) {
                      echo "Reserve Online";
                    } else {
                      echo "Not available for reservation";
                    }
                  }
                ?>
              </button>
              <button 
                type="button" 
                name="reserve_book_button" 
                class="button button-favourite" 
                onclick="favouriteBook('<?php echo $book['book_id'] ?>', '<?php echo $favStatus ?>')">
                <?php
                  if ($favStatus === '1') {
                    echo "Unfavourite Book";
                  } else {
                    echo "Favourite Book";
                  }
                ?>
              </button>
              <button
                type="button"
                class="button button-secondary"
                onclick="readBook('<?php echo $book['book_id'] ?>')">Read Online</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>