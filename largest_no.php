<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Number</title>
</head>

<body>
    <ul>
        <h1>
            <li>
                Find The Largest Number :

            </li>
        </h1>
    </ul>
    <center>
        <form method="post">
            <table>
                <tr>
                    <td>
                        <label for="first">Enter 1st Number : </label>
                    </td>
                 
                    <td><input type="tel" id="first" name="first" placeholder="enter 1st number"></td>
                </tr>

                <tr>
                    <td>
                        <label for="secound">Enter 2nd Number : </label>
                    </td>
                    <td><input type="tel" id="secound" name="secound" placeholder="enter 2nd number"></td>
                </tr>

                <tr>
                    <td>
                        <label for="third">Enter 3rd Number : </label>
                    </td>
                    <td>
                        <input type="tel" id="third" name="third" placeholder="enter 3rd number">
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" value="Find">
        </form>
        <br>
        <br>
        <?php
        $f = $_POST['first'];
        $s = $_POST['secound'];
        $t = $_POST['third'];
        if ($f > $s && $f > $t) {
            echo "$f is Largest Number";
        } else if ($s > $t && $s > $f) {
            echo "$s is Largest Number";
        } else {
            echo "$t is Largest Number";
        }
        ?>
    </center>
</body>

</html>