<html>
    <head><title>Writing to a file</title></head>
    <body>
        <h3>Gold Tournament Round Results Form</h3>
        <?
        #Define your data file and its path, ensure you have write permission to folder
        $myTextFile='golf.txt';

        #Start processing only when the form is submitted
        if(isset($_POST['submit']))
        {

            # Set the string to be written to the file in an array
            $data = array($_POST['golfer'],$_POST['score'],$_POST['par'],_$POST['net'],$_POST['scoreround'],$_POST['netround']);

            # The next line opens a file handle
            # The file handle is like an alias to the file
            # The 'a' in the fopen function means append so entries
            # will be appended to the text file
            $fp = fopen($myTextFile,'a')
            or die("Couldn't open file for writing!");

            # Write data into text file
            # \t represents a tab character, \n represents a new line 
            for each ($data as $v){
                @fwrite($fp,"$v\t");
            }
            @fwrite($fp,"\n");
            @fclose($fp);
        }
        ?>
        <form method="POST" action="Write.php">
            <table border="1" cellpadding="5" cellspacing="0" style="border-collapse:collapse" width="40%">
                <tr>
                    <td width=20% align="left">Golfer</td>
                    <td width="30%"><input type="text" name="golfer" size="30"/></td>
                </tr>

                 <tr>
                    <td width=20% align="left">Score</td>
                    <td width="30%"><input type="text" name="score" size="30"/></td>
                </tr>

                 <tr>
                    <td width=20% align="left">Par</td>
                    <td width="30%"><input type="text" name="par" size="30"/></td>
                </tr>

                 <tr>
                    <td width=20% align="left">Net</td>
                    <td width="30%"><input type="text" name="net" size="30"/></td>
                </tr>

                 <tr>
                    <td width=20% align="left">Score Through Round</td>
                    <td width="30%"><input type="text" name="scoreround" size="30"/></td>
                </tr>

                 <tr>
                    <td width=20% align="left">Net Through Round</td>
                    <td width="30%"><input type="text" name="netround" size="30"/></td>
                </tr>

                <tr>
                    <td colspan="2" align="left">
                        <input type="submit" value="Insert Results" name="submit">
                        <input type="reset" value="Clear Results" name="clear">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>