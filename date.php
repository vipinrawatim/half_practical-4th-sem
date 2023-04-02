<?php
date_default_timezone_set('Asia/Kolkata');
$cookie_name = "time";
$cookie_value = date("h:i:s A , d-m-Y");
setcookie($cookie_name, $cookie_value, time() + (86400 * 7), "/");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date-Time</title>
</head>

<body>
    <center>
        <h1>
            <?php
            $time = $_COOKIE[$cookie_name];
            echo "LAST VISITED ON $time";
            ?>
        </h1>
    </center>
</body>

</html>