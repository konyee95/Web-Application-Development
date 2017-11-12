<?php 
  if (!defined('__CONFIG__')) {
    exit('You do not have a config file, go away');
  }

  class DB {
    protected static $con;

    /* gets called as soon as DB object is initialized */
    private function __construct() {
      try {
        self::$con = new PDO("mysql:charset=utf8mb4;host=localhost;port=3306;dbname=my_library", "root", "");
        self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$con->setAttribute(PDO::ATTR_PERSISTENT, false);
      } catch (PDOException $e) {
        echo "Could could not connect to database.\r\n";
        exit;
      }
    }

    public static function getConnection() {
      if (!self::$con) {
        new DB();
      }

      return self::$con;
    }
  }
?>