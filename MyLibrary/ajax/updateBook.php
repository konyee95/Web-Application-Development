<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $return = [];
    $return['action'] = "updateBook";

    $data = json_decode($_POST["data"], false);

    $bookID                = $data->bookID;
    $bookTitle             = $data->bookTitle;
    $bookAuthor            = $data->bookAuthor;
    $bookAvailability      = $data->bookAvailability;
    $bookCategory          = $data->bookCategory;
    $bookRating            = $data->bookRating;
    $bookImageUrl          = $data->bookImageUrl;
    $bookPublisherID       = $data->bookPublisherID;
    $bookPublishedYear     = $data->bookPublishedYear;
    $bookOnlineReadingUrl  = $data->bookOnlineReadingUrl;
    $bookDescription       = $data->bookDescription;
    $bookPhysicalLocation  = $data->bookPhysicalLocation;
    $noOfTimes             = $data->bookNoOfTimes;

    try {
      $insertBook = $con->prepare("UPDATE books SET title=:bookTitle, author=:bookAuthor, description=:bookDescription, availability=:bookAvailability, category=:bookCategory, rating=:bookRating, image_url=:bookImageUrl, publisher_id=:bookPublisherID, published_year=:bookPublishedYear, online_reading_url=:bookOnlineReadingUrl, physical_location=:bookPhysicalLocation, no_of_times=:noOfTimes WHERE book_id=:bookID");
      $insertBook->bindParam(':bookID', $bookID);
      $insertBook->bindParam(':bookTitle', $bookTitle);
      $insertBook->bindParam(':bookAuthor', $bookAuthor);
      $insertBook->bindParam(':bookDescription', $bookDescription);
      $insertBook->bindParam(':bookAvailability', $bookAvailability);
      $insertBook->bindParam(':bookCategory', $bookCategory);
      $insertBook->bindParam(':bookRating', $bookRating);
      $insertBook->bindParam(':bookImageUrl', $bookImageUrl);
      $insertBook->bindParam(':bookPublisherID', $bookPublisherID);
      $insertBook->bindParam(':bookPublishedYear', $bookPublishedYear);
      $insertBook->bindParam(':bookOnlineReadingUrl', $bookOnlineReadingUrl);
      $insertBook->bindParam(':bookPhysicalLocation', $bookPhysicalLocation);
      $insertBook->bindParam(':noOfTimes', $noOfTimes);
      $insertBook->execute();

      $return['action_result'] = true;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }

    /* always return encoded json! */
    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('ERROR 404! Something went wrong!');
  }
?>