<!DOCTYPE HTML>
<html>

<head>
    <title>Submit Form</title>
</head>

<body>
    <h3>Please fill in all the fields and click Submit Form</h3>
    <hr />
    <br />
    <form id="MyForm" method="POST" action="display.php">
        <table>
            <tr>
                <td>
                    <label>First Name:</label>
                </td>
                <td>
                    <input type="text" name="fname" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Last Name:</label>
                </td>
                <td>
                    <input type="text" name="lname" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Address:</label>
                </td>
                <td>
                    <textarea name="address" cols="25" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email:</label>
                </td>
                <td>
                    <input type="text" name="email" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Phone Number:</label>
                </td>
                <td>
                    <input type="text" name="phone" />
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submitButton" value="Submit Form" />
                </td>
                <td>
                    <input type="reset" name="clearButton" value="Clear Form" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>