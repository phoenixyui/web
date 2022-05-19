<html>

<head>
    <title>Noob</title>
</head>

<body>
    <form action="register.php" method="post">
        <input type="text" name="username" value="" />
        <input type="submit" name="submit" value="Submit" />// you missed here
    </form>
    
    <?php
    /*
    if (isset($_POST['submit'])) { //to check if the form was submitted
        $username = $_POST['username'];
        echo $username;
    }*/
    ?>
    

</body>
<html>