<?php
    $golfFile = 'golf.txt';

    if (isset($_POST['submit'])) {
      $data = array($_POST['golfer'], $_POST['score'], $_POST['par'], $_POST['net'], $_POST['scoreround'], $_POST['netround']);

      $fp = fopen($golfFile, 'a') or die("Could not open file for writing");

      fwrite($fp, "\n");
      foreach($data as $v) {
        fwrite($fp, "$v\t");
      }
      fclose($fp);
    }
  ?>

  <html lang="en">

  <head>
    <title>Write to Golf</title>
  </head>

  <body>
    <h3>Golf Tournament Round Results Form</h3>
    <form method="POST" action="write.php">
      <table border=“1” cellpadding=“5” cellspacing=“0” style=“border-collapse: collapse” width=“40%”>
        <tr>
          <td width="20%" align="left">Golfer</td>
          <td width="30%">
            <input type="text" name="golfer" size="30">
          </td>
        </tr>
        <tr>
          <td width="20%" align="left">Score</td>
          <td width="30%">
            <input type="text" name="score" size="30">
          </td>
        </tr>
        <tr>
          <td width="20%" align="left">Par</td>
          <td width="30%">
            <input type="text" name="par" size="30">
          </td>
        </tr>
        <tr>
          <td width="20%" align="left">Net</td>
          <td width="30%">
            <input type="text" name="net" size="30">
          </td>
        </tr>
        <tr>
          <td width="20%" align="left">Score Through Round</td>
          <td width="30%">
            <input type="text" name="scoreround" size="30">
          </td>
        </tr>
        <tr>
          <td width="20%" align="left">Net Through Round</td>
          <td width="30%">
            <input type="text" name="netround" size="30">
          </td>
        </tr>

        <tr>
          <td coldspan="2" align="left">
            <input type="submit" value="Insert Results" name="submit">
            <input type="reset" value="Clear Results" name="clear">
          </td>
        </tr>
      </table>
    </form>
  </body>

  </html>