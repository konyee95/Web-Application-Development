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
          <a href="" class="see-all">See all &rarr;</a>
        </div>
        <div class="explore-content-row-body">
          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Kelsey Bibliography</p>
          </div>

          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Kelsey Bibliography</p>
          </div>

          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Kelsey Bibliography</p>
          </div>

          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Kelsey Bibliography</p>
          </div>

          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Kelsey Bibliography</p>
          </div>
        </div>
      </div>

      <div id="explore-content-row-2" class="explore-content-row">
        <div class="explore-content-row-header">
          <h3 class="explore-row-title">By Category</h3>
          <a href="" class="see-all">See all &rarr;</a>
        </div>
        <div class="explore-content-row-body">
          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Action</p>
          </div>

          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Bibliography</p>
          </div>

          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Educational</p>
          </div>

          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Fiction</p>
          </div>

          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Non-Fiction</p>
          </div>

          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Sports</p>
          </div>

          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Engineering</p>
          </div>
        </div>
      </div>
      <div id="explore-content-row-3" class="explore-content-row">
        <div class="explore-content-row-header">
          <h3 class="explore-row-title">Most Popular</h3>
          <a href="" class="see-all">See all &rarr;</a>
        </div>
        <div class="explore-content-row-body">
          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Kelsey Bibliography</p>
          </div>

          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Kelsey Bibliography</p>
          </div>

          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Kelsey Bibliography</p>
          </div>

          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Kelsey Bibliography</p>
          </div>

          <div class="small-book-block">
            <div class="small-book-image-container">
              <img>
            </div>
            <p class="small-book-title">Kelsey Bibliography</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>