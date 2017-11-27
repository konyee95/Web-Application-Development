<?php
  $fp = fopen("./golf.txt", "r") or die("could not open the file");

  echo "<table border='1' cellspacing='1' cellpadding='2' valign='center'>\n";
  echo "<tr style='background: #C0C0C0'>"
  ."<th>Golfer</th>"
  ."<th>Score</th>"
  ."<th>Par</th>"
  ."<th>Net</th>"
  ."<th>Score Thru Round</th>"
  ."<th>Net Thru Round</th>"
  ."</tr>";

  while(!feof($fp)) {
    $data = fgets($fp, 1024);
    $values = chop($data);
    $val = explode("\t", $values);
    echo "<td align='center'>{$val[0]}</td>";
    echo "<td align='center'>{$val[1]}</td>";
    echo "<td align='center'>{$val[2]}</td>";
    echo "<td align='center'>{$val[3]}</td>";
    echo "<td align='center'>{$val[4]}</td>";
    echo "<td align='center'>{$val[5]}</td>";
    echo "</tr>";
  }

  echo "</table>";

  fclose($fp);
?>