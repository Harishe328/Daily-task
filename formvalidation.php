<?php
$nameerror = "";
$mailerror = "";
if (isset($_GET["submit"])) {
    $name = $_GET["name"];
    $mail = $_GET["email"];
    if (empty($name)) {
        $nameerror = "* Name is required";
    } else {
        $name = trim($name);
        $name = htmlspecialchars($name);
        if (!preg_match("/^[a-zA-Z ]$/", $name)) {
            $nameerror = "* Name Should contain only Alphabets";
        }
    }
    if (empty($mail)) {
        $mailerror = "* Mail Id is required";
    } else {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $mailerror = "* Mail ID format is wrong";
        }
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="$_GET">
        <table>
            <tr>
                <td><label for="name">Name :</label></td>
                <td><input type="text" name="name"></td>
                <td><div style="color: red;"><?php echo $nameerror; ?></div></td>
            </tr>
            <tr>
                <td><label for="email">Email :</label></td>
                <td><input type="text" name="email"></td>
                <td><div style="color: red;"><?php echo $mailerror; ?></div></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Submit</button></td>
            </tr>
        </table>
    </form>
</body>
</html>