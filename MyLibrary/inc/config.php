<?php
   /*
    * if user is coming from a direct url (possibly hacking), direct him to homepage
    * usage: profile page
    */
   if (!defined('__CONFIG__')) {
    header("Location: ./index.php");
  }

  /* Always start session */
  if (!isset($_SESSION)) {
    session_start();
  }

  /* allow error reporting */
  error_reporting(-1);
  ini_set('display_errors', 'On');

  /* include classes */
  include_once "classes/Filter.php";
  include_once "classes/DB.php";
  include_once "classes/Book.php";
  include_once "classes/Student.php";
  include_once "classes/Staffs.php";
  include_once "classes/Page.php";
  include_once "functions/main.php";

  $con = DB::getConnection();
?>