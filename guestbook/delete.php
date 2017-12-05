<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {color: #FFFFFF; font-weight: bold; }
.style7 {	color: #000066;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: x-large;
}
.style8 {
	color: #FFFFFF;
	font-weight: bold;
	font-size: 24px;
	font-family: "Monotype Corsiva";
}
.style10 {
	font-family: "Monotype Corsiva";
	font-size: 24px;
}
.style11 {font-size: 24px}
-->
</style>
</head>

<body>
<table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="377" align="center" valign="middle" bgcolor="#72634e"><p class="style7"><span class="style1"><strong>WELCOME TO </strong><strong>GUESTBOOK</strong></span></p></td>
    <td width="501" bgcolor="#72634E"><div align="right"><img src="hotel_banner.jpg" alt="banner" width="500" height="120" /></div></td>
  </tr>
</table>
<table width="80%" border="3" align="center" cellpadding="0" cellspacing="0" bordercolor="#333333">
<?php
include('connect.php');
$eml = $_POST['email'];

$sql= "DELETE FROM tblcomment WHERE email='$eml'";

if($conn->query($sql)===TRUE){
    //output data of each register_shutdown_function

    echo "Record deleted successfully";
    } else{
        echo "Error deleting record " .$conn->error;
    }
$conn->close();

?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
