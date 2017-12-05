<?php
//Initialize the session
session_start();
if (!isset($_SESSION['username'])){
    $_SESSION['username']= $_POST['username'];
    $_SESSION['password']= $_POST['password'];
}

include('connect.php');

$sql ="SELECT * FROM tblcomment WHERE userName='".$_SESSION['username']."' AND password='".$_SESSION['password']."'";
$result = $conn->query($sql);

if($result->num_rows==0){
    echo "Login Fail";
    session_unset();
    echo "<meta http-equiv=\refresh\" content=\"3 ; URL=index.html\">";
}
else{
    include ("index_login.html");
}

//Closes specified connection
$conn-> close();
?>