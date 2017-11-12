<?php
   /*
    * if user is coming from a direct url (possibly hacking), direct him to homepage
    * usage: profile page
    */
   if (!defined('__CONFIG__')) {
    header("Location: ./index.php");
  }
?>