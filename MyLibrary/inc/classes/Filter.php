<?php 
  if (!defined('__CONFIG__')) {
    exit('You do not have a config file');
  }

  class Filter {
    /* Returns a valid or invalid email address */
    public static function Email( $email ) {
      return filter_var( $email , FILTER_SANITIZE_EMAIL);
    }
    
    /* Returns a valid or invalid URL */
    public static function URL( $url ) {
      return filter_var( $url , FILTER_SANITIZE_URL);
    }
    
    /* Returns an integer after being filtered.  */
    public static function Int( $integer ) {
      return (int) $integer = filter_var( $integer , FILTER_SANITIZE_NUMBER_INT);
    }
  }
?>