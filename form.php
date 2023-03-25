<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
  
</head>

<body>
    <center>
        <h1>FORM</h1>

        <form method="post">
            <label for="u">Username : </label>
            <input type="text" name="uname" placeholder="enter your name" id="u">
            <input type="submit" value="Submit">
        </form>
        <br>
        <?php
        $u = $_POST['uname'];
        echo " <h3> Welcome $u </h3>";
        ?>
    </center>
</body>

</html>