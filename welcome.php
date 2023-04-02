<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To City</title>
</head>
<body>
    <?php
    $_SESSION["city"] = $_POST['city'];
    $u=$_SESSION["name"];
    $c= $_SESSION["city"]
    ?>
    <center>
        <h1>
            <?php
            echo"Hello $u , Welcome To $c";
            ?>
        </h1>
        
    </center>
</body>
</html>
