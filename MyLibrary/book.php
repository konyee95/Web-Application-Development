<!DOCTYPE html>
<?php
  define('__CONFIG__', true);
  require_once "inc/config.php";

  // get data
  $base64Data = $_GET['data'];
  $decodedData = base64_decode($base64Data);
  $data = json_decode($decodedData, true);
  $book = $data['data'][0];
  $bookStatus = $book['availability'];
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
              <?php echo $book['category']; ?> /
              <?php echo $book['rating']; ?>
            </p>
            <p>[Floor / Rack / Row]
              <?php echo $book['physical_location'] ?>
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
                onclick="reserveBook('<?php echo $book['book_id'] ?>')">
                <?php echo ($bookStatus !== '0' ? "Reserve Online" : "Not available") ?>
              </button>
              <button
                type="button" 
                name="reserve_book_button" 
                class="button button-favourite"
                onclick="favouriteBook('<?php echo $book['book_id'] ?>')">
                Favourite Book
              </button>
              <a href="<?php echo $book['online_reading_url'] ?>" class="button button-secondary">Read Online</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>