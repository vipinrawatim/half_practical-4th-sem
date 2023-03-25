<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>

<body>
    <?php
    session_start();


    ?>
    <center>
        <h1>Log In</h1>
        <br>
        <br>
        <form method="post">
            <table>
                <tr>
                    <td>
                        <label for="username">Username : </label>
                    </td>
                    <td><input type="text" name="user" id="username" placeholder="enter username "></td>

                </tr>
                <tr>
                    <td>
                        <label for="password"> Password : </label>
                    </td>
                    <td>
                        <input type="password" name="pass" placeholder="enter password" maxlength="12" id="password">
                    </td>
                </tr>

            </table>
            <br>
            <br>
            <input type="submit" value="Login">
        </form>
        <?php
        $_SESSION["U"] = "UUCSE";
        $_SESSION["P"] = "UNIVERSITY";
      
        
        $ui = $_POST['user'];
        $pi = $_POST['pass'];
        if ($ui == $_SESSION["U"] && $pi ==  $_SESSION["P"]) {
            header("Location:welcome.html");
        }
         else if ($ui != $u && $pi != $T) {
            header("Location:sorry.html");
        }
        ?>
    </center>
</body>

</html>