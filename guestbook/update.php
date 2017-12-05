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
  <table width="80%" border="0" align="center" cellpadding="0" cellspacing="0">
  <?php
  include ('connect.php');

  //retrieve email from form
  $eml= $_POST['email'];
  $sql = "SELECT * FROM tblcomment WHERE email='$eml'";
  $result = $conn -> query($sql);
  if ($result -> num_rows > 0){
  $row= $result->fetch_assoc();
  }
?>
  <form id="form1" name="form1" method="post" action="insert.php">
  <tr>
    <td width="234" align="center" valign="middle" bgcolor="#a99a7d">&nbsp;</td>
    <td width="366" align="center" valign="middle" bgcolor="#a99a7d"><p align="left">&nbsp;</p>    </td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#a99a7d"><div align="right">
     Name: </div></td>
    <td align="center" valign="middle" bgcolor="#a99a7d"><div align="left">
      <input name="u_name" type="text" id="u_name" value="<?php echo $row['userName']?>" size="30" />
    </div></td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#a99a7d"><div align="right">Email: </div></td>
    <td align="center" valign="middle" bgcolor="#a99a7d"><div align="left">
      <input name="u_email" type="text" id="u_email" value="<?php echo $row['email'];?>" size="30" />
    </div></td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#a99a7d"><div align="right">Gender: </div></td>
    <td align="center" valign="middle" bgcolor="#a99a7d"><div align="left">
    <?php
    $genderValue= $row['gender'];

    if($genderValue==="F"){
    ?>
      Gender<input name="u_gender" type="radio" value="F" checked />
      Female
      <input name="u_gender" type="radio" value="M" />
    Male
    <?
    }
    else{
    ?>
      Gender<input name="u_gender" type="radio" value="F" />
      Female
      <input name="u_gender" type="radio" value="M" checked />
    Male
    <?
    }
    ?>
      <input name="u_gender" type="radio" value="F" checked="checked" />
      Female
      <input name="u_gender" type="radio" value="M" />
    Male</div></td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#a99a7d"><div align="right">Comment: </div></td>
    <td align="center" valign="middle" bgcolor="#a99a7d"><div align="left">
      <textarea name="u_comment" cols="30" rows="5" id="u_comment"></textarea>
    </div></td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#a99a7d"><div align="right">Password: </div></td>
    <td align="center" valign="middle" bgcolor="#a99a7d"><div align="left">
      <label>
      <input name="password" type="password" id="password" size="30" />
      </label>
    </div></td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#a99a7d">&nbsp;</td>
    <td align="center" valign="middle" bgcolor="#a99a7d"><div align="left">
      <p>
        <input type="submit" name="Submit" value="UPDATE" />
        <input type="reset" name="Submit2" value="RESET" />
      </p>
      <?php
include ("connect.php");

$nm = $_POST['u_name'];
$eml = $_POST['u_email'];
$gen = $_POST['u_gender'];
$cmt = $_POST['u_comment'];

$sql = "UPDATE tblcomment SET userName='{$nm}', gender='{$gen}', comment='{$cmt}', WHERE email='{$eml}'";

if($conn->query($sql)===TRUE){
    echo "Data $eml Had Been Updated!";
} else{
    echo "Error: " .sql. "<br>" .$conn->error;
}

// Closes specified connection
    $conn->close();
?>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      </div></td>
  </tr>
    </form>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
