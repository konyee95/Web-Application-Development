<?php
// Initialize the session
session_start();
if (isset($_SESSION['username'])){
    //Destroy the session
    $_SESSION = array();
    session_destroy();
    echo "<meta http-equiv=\"refresh\" content=\"3; URL=index.html\">";
}
?>