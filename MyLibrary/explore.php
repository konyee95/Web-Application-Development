<!DOCTYPE html>
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
        <form id="search-form" class="search-form" action="" method="GET">
          <input id="search-input" class="search-input" type="text" placeholder="Search" />
        </form>
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
          <h2 class="explore-row-title">Handpicked by MyLibrary</h2>
          <a href="" class="see-all">See all &rarr;</a>
        </div>
        <div class="explore-content-row-body">
          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Kelsey Bibliography</p>
          </div>

          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Kelsey Bibliography</p>
          </div>

          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Kelsey Bibliography</p>
          </div>

          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Kelsey Bibliography</p>
          </div>

          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Kelsey Bibliography</p>
          </div>
        </div>
      </div>

      <div id="explore-content-row-2" class="explore-content-row">
        <div class="explore-content-row-header">
          <h2 class="explore-row-title">By Category</h2>
          <a href="" class="see-all">See all &rarr;</a>
        </div>
        <div class="explore-content-row-body">
          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Action</p>
          </div>

          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Bibliography</p>
          </div>

          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Educational</p>
          </div>

          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Fiction</p>
          </div>

          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Non-Fiction</p>
          </div>

          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Sports</p>
          </div>

          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Engineering</p>
          </div>
        </div>
      </div>
      <div id="explore-content-row-3" class="explore-content-row">
        <div class="explore-content-row-header">
          <h2 class="explore-row-title">Most Popular</h2>
          <a href="" class="see-all">See all &rarr;</a>
        </div>
        <div class="explore-content-row-body">
          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Kelsey Bibliography</p>
          </div>

          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Kelsey Bibliography</p>
          </div>

          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Kelsey Bibliography</p>
          </div>

          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Kelsey Bibliography</p>
          </div>

          <div class="book-block">
            <div class="book-image-container">
              <img>
            </div>
            <p class="book-title">Kelsey Bibliography</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>