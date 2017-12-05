
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
  <tr align="center" valign="middle" bgcolor="#72634E">
    <td width="150" bordercolor="#F0EFEC" bgcolor="#72634E"><span class="style2"><a href="index.html">HOME</a></a></span></td>
    <td width="150" bordercolor="#F0EFEC" bgcolor="#72634E"><span class="style2">INSERT</a></span></td>
    <td width="150" bordercolor="#F0EFEC" bgcolor="#72634E"><span class="style2">RETRIEVE</a></span></td>
    <td width="150" bordercolor="#F0EFEC" bgcolor="#72634E"><span class="style2">UPDATE</a></span></td>
    <td width="150" bordercolor="#F0EFEC" bgcolor="#72634E"><span class="style1"><strong>DELETE</a></strong></span></td>
  </tr>
</table>
<?php
include ("connect.php");

$nm = $_POST['name'];
$eml = $_POST['email'];
$gdr = $_POST['gender'];
$cmt = $_POST['comment'];
$pass = $_POST['password'];

$sql = "INSERT INTO tblcomment (userName, email, gender, comment, password)
VALUES ('$nm','$eml','$gdr','$cmt','$pass')" or die ("Error inserting data into table");

if($conn->query($sql)===TRUE){
    echo "New record created successfully";
} else{
    echo "Error: " .sql. "<br>" .$conn->error;
}

// Closes specified connection
    $conn->close();
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
