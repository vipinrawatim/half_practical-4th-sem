<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>City Input</title>
</head>

<body>
    <?php
    $uname = $_POST['u_name'];
    $_SESSION["name"] = $uname;
    ?>
    <center>
        <h1> <?php
                echo "Hello $uname";
                ?></h1>
        <form method="post" action="welcome.php">
            <label for="city">Your Favourite City : </label>
            <input type="text" name="city" id="city">
            <input type="submit" value="submit">


        </form>
       
    </center>
</body>

</html>