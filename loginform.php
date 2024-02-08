<?php
include("./login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="email">Email </label></td><br>
                <td><input type="mail" name="email" required></td>
                </tr>
                <?php if (isset($_POST["submit"])) {?>
                <tr><td><h3><?php echo $a2; ?></h3></td></tr>
                <?php }?>
            </tr>
            <tr>
                <td><label for="password">Password </label></td><br>
                <td><input type="password" name="password" required></td>
                </tr>
                <?php if (isset($_POST["submit"])) {?>
                <tr><td><h3><?php echo $a1,$a3; ?></h3></td></tr>
                <?php }?>
            <tr>
                <td><input type="submit" name="submit" value="Submit" id="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>