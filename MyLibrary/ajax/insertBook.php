<?php 
  define('__CONFIG__', true);
  require_once "../inc/config.php";
  header('Content-Type: application/json'); 

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $return = [];
    $return['action'] = "insertBook";

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
    $noOfTimes             = 0;

    try {
      $insertBook = $con->prepare("INSERT INTO books(book_index, book_id, title, author, description, availability, category, rating, image_url, publisher_id, published_year, online_reading_url, physical_location, no_of_times, reg_time) VALUES(NULL, :bookID, :bookTitle, :bookAuthor, :bookDescription, :bookAvailability, :bookCategory, :bookRating, :bookImageUrl, :bookPublisherID, :bookPublishedYear, :bookOnlineReadingUrl, :bookPhysicalLocation, :noOfTimes, CURRENT_TIMESTAMP)");
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
      $return['data'] = $data;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }

    /* always return encoded json! */
    echo json_encode($return, JSON_PRETTY_PRINT);
  } else {
    exit('ERROR 404! Something went wrong!');
  }
?>