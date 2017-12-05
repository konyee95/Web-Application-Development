<?php
  if (!defined('__CONFIG__')) {
    exit('You do not have a config file');
  }

  class Book {
    private $con;

    public $book_index;
    public $book_id;
    public $title;
    public $author;
    public $description;
    public $availability;
    public $category;
    public $rating;
    public $image_url;
    public $publisher_id;
    public $published_year;
    public $online_reading_url;
    public $physical_location;
    public $no_of_times;
    public $reg_time;

    public function __construct(string $book_id) {
      $this->con = DB::getConnection();

      $book = $this->con->prepare("SELECT book_index, book_id, title, author, description, availability, category, rating, image_url, publisher_id, published_year, online_reading_url, physical_location, no_of_times, reg_time FROM books WHERE book_id=:book_id LIMIT 1");
      $book->bindParam(':book_id', $book_id, PDO::PARAM_STR);
      $book->execute();

      if ($book->rowCount() == 1) {
        $book = $book->fetch(PDO::FETCH_OBJ);

        $this->book_index          = (string) $book->book_index;
        $this->book_id             = (string) $book->book_id;
        $this->title               = (string) $book->title;
        $this->author              = (string) $book->author;
        $this->description         = (string) $book->description;
        $this->availability        = (int)    $book->availability;
        $this->category            = (string) $book->category;
        $this->rating              = (string) $book->rating;
        $this->image_url           = (string) $book->image_url;
        $this->publisher_id        = (string) $book->publisher_id;
        $this->published_year      = (string) $book->published_year;
        $this->online_reading_url  = (string) $book->online_reading_url;
        $this->physical_location   = (string) $book->physical_location;
        $this->no_of_times         = (int)    $book->no_of_times;
        $this->reg_time            = (string) $book->reg_time;
      }
    }

    public static function IsBookAvailable($book_id) {
      $con = DB::getConnection();

      $checkBook = $con->prepare("SELECT availability FROM books WHERE book_id = LOWER(:book_id) LIMIT 1");
      $checkBook->bindParam(':book_id', $book_id, PDO::PARAM_STR);
      $checkBook->execute();

      $result = (boolean) $checkBook->fetch()[0];

      return $result;
    }
  }
?>