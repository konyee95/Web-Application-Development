<?php
# Open the file using fopen() function
$fp = fopen("golf.txt","r") or die("Couldn't open the file");

# Create table and six headings
echo "<table border='1' cellspacing='1' cellpadding='2' valign='center'>\n";
echo "<tr style='background: #C0C0C0'>"
."<th>Golfer</th>"
."<th>Score</th>"
."<th>Par</th>"
."<th>Net</th>"
."<th>Score Thru Round</th>"
."<th>Net Thru Round</th>"
."</tr>";

# Read data from the file
while(!feof($fp))
{
    $data = fgets ($fp,1024);
    $values = chop ($data);
    $val = explode("\t",$values);
    echo "<td>". $val[0] ."</td>";
    echo "<td align='center'>" .$val[1]."</td>";
    echo "<td align='center'>" .$val[2]."</td>";
    echo "<td align='center'>" .$val[3]."</td>";
    echo "<td align='center'>" .$val[4]."</td>";
    echo "<td align='center'>" .$val[5]."</td>";
    echo "</tr>";
}
echo "</table>";

#close the file
fclose($fp);

?>