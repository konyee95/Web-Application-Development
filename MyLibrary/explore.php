<!DOCTYPE html>
<?php
    define('__CONFIG__', true);
    require_once "inc/config.php";
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
          <a href="#">EXPLORE</a>
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
          <h3 class="explore-row-title">Handpicked by MyLibrary</h3>
          <!-- <a href="" class="see-all">See all &rarr;</a> -->
        </div>
        <div class="explore-content-row-body">
          <?php
            $selectBook = $con->prepare("SELECT book_id, title, image_url FROM books ORDER BY RAND() LIMIT 7");
            $selectBook->execute();
            $result = $selectBook->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $book) {
              echo "<div class='small-book-block' onClick='loadBook(\"" . $book['book_id'] . "\")'>";
              echo "<div class='small-book-image-container'>";
              echo "<img class='small-book-image' src={$book['image_url']} />";
              echo "</div>";
              echo "<div class='small-book-title-container'>";
              echo "<p class='small-book-title'>{$book['title']}</p>";
              echo "</div>";
              echo "</div>";
            }
          ?>
        </div>
      </div>

      <div id="explore-content-row-2" class="explore-content-row">
        <div class="explore-content-row-header">
          <h3 class="explore-row-title">By Category</h3>
          <!-- <a href="" class="see-all">See all &rarr;</a> -->
        </div>
        <div class="explore-content-row-body">

          <div class="small-book-block" onClick="loadBookCategory('Business')">
            <div class="small-book-image-container">
              <img class="small-book-image" src="./image/category/business.jpg">
            </div>
            <p class="small-book-title">Business</p>
          </div>

          <div class="small-book-block" onClick="loadBookCategory('Computers')">
            <div class="small-book-image-container">
              <img class="small-book-image" src="./image/category/computer.png">
            </div>
            <p class="small-book-title">Computer</p>
          </div>

          <div class="small-book-block" onClick="loadBookCategory('Engineering')">
            <div class="small-book-image-container">
              <img class="small-book-image" src="./image/category/engineering.jpg">
            </div>
            <p class="small-book-title">Engineering</p>
          </div>

          <div class="small-book-block" onClick="loadBookCategory('Fiction')">
            <div class="small-book-image-container">
              <img class="small-book-image" src="./image/category/fiction.jpg">
            </div>
            <p class="small-book-title">Fiction</p>
          </div>

          <div class="small-book-block" onClick="loadBookCategory('Literary')">
            <div class="small-book-image-container">
              <img class="small-book-image" src="./image/category/literary.png">
            </div>
            <p class="small-book-title">Literary</p>
          </div>

        </div>
      </div>
      <div id="explore-content-row-3" class="explore-content-row">
        <div class="explore-content-row-header">
          <h3 class="explore-row-title">Most Popular</h3>
          <!-- <a href="" class="see-all">See all &rarr;</a> -->
        </div>
        <div class="explore-content-row-body">
          <?php
            $selectBook = $con->prepare("SELECT book_id, title, image_url FROM books ORDER BY rating desc");
            $selectBook->execute();
            $result = $selectBook->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $book) {
              echo "<div class='small-book-block' onClick='loadBook(\"" . $book['book_id'] . "\")'>";
              echo "<div class='small-book-image-container'>";
              echo "<img class='small-book-image' src={$book['image_url']} />";
              echo "</div>";
              echo "<div class='small-book-title-container'>";
              echo "<p class='small-book-title'>{$book['title']}</p>";
              echo "</div>";
              echo "</div>";
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>