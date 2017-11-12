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
  include_once "classes/DB.php";

  $con = DB::getConnection();
?>