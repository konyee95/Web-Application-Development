<!DOCTYPE html>
<?php
    define('__CONFIG__', true);
    require_once "inc/config.php";

    // get data
    $base64Data = $_GET['data'];
    $decodedData = base64_decode($base64Data);
    $data = json_decode($decodedData, true);
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

      <div id="info-container" class="explore-container sticky-header-padding">
        <div id="explore-content-row-1" class="explore-content-row ">
          <div class="explore-content-row-header">
            <h2 class="explore-row-title">
              Here's all the books for <?php echo $data['search_category'] ?>
            </h2>
          </div>
          <div class="explore-content-row-body">
            <?php
              if ($data['action_result'] === false) {
                echo "<h3 style='padding-left: 10px;'>No results found. Try again?</h3>";
              } else {
                foreach ($data['data'] as $book) {
                  echo "<div id='{$book['book_id']}' class='small-book-block' onClick='loadBook(\"" . $book['book_id'] . "\")'>";
                  echo "<div class='small-book-image-container'>";
                  echo "<img src={$book['image_url']} height='100%'>";
                  echo "</div>";
                  echo "<div class='small-book-title-container'>";
                  echo "<p class='small-book-title'>{$book['title']} by {$book['author']}</p>";
                  echo "</div>";
                  echo "</div>";
                }
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>