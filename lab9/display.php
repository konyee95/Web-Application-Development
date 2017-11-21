<html>
    <head><title>Display Form</title></head>
    <body>
        <?php echo "Chin Kon Yee" ?>
        <?php echo "B031510363" ?>
        <h3> User Information </h3>
        <hr />
        <br />
        First Name: <?php echo $_POST["fname"]; ?><br/>
        Last Name: <?php echo $_POST["lname"]; ?><br/>
        Address: <?php echo $_POST["address"]; ?><br/>
        Email: <?php echo $_POST["email"]; ?><br/>
        Phone Number: <?php echo $_POST["phone"]; ?><br/>
    </body>
</html>