<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATH</title>
</head>

<body>
    <center>
        <h1>CHECK : Whether number is Even or Odd</h1>
        <br>

        <form method="post">
            <label for="n">Enter Number : </label>
            <input type="tel" name="num" id="n" placeholder="enter integer value ">
            <input type="submit" value="Done">
        </form>
        <br>
        <br>
        <h3>
            <?php

            $number = $_POST['num'];
            if ($number % 2 == 0) {
                echo " $number is Even number";
            } else {
                echo "$number is Odd number";
            }

            ?>
        </h3>
    </center>
</body>

</html>