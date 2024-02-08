<?php
$a1 = "";
$a2 = "";
$a3 = "";
include "./connection.php";
session_start();
$email = $_SESSION["Email"];

if (isset($_POST["submit"])) {
    if (strlen($_POST["phone"]) != 10) {
        $a1 = "* Phone Number should contain ten number";
    } elseif ($_POST["age"] > 150) {
        $a2 = "Man cannot survive";
    } else {
        $age = $_POST["age"];
        $phone = $_POST["phone"];

        $stmt = $conn->prepare("UPDATE reg SET age = ?,phone_number=? WHERE email =?");
        $stmt->bind_param('iss', $age, $phone, $email);
        $stmt->execute();
        $a3 = "Updated successfully";
        $stmt->close();
        $conn->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update page</title>
    <style>
        #submit{
            background-color: rgb(103, 122, 207);
            position: relative;
            left: 150px;
            border-radius: 20px;
            padding: 5px;
            border: 2px solid black;
        }
        h3{
            color:aqua;
            position: relative;
            left: 100px;
        }
        table{
            background-image: linear-gradient(to bottom right,rgb(70, 123, 201),rgb(62, 119, 204),rgb(135, 36, 165));
            position:relative;
            top: 100px;
            left:450px;
            border: 2px solid;
            border-radius: 10px;
        }
        body{
            background-color: aqua;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table >
            <tr>
                <td><label for="Age">Age :</label></td>
                <td><input type="number" name="age" required></td>
            </tr>
            <?php if (isset($_POST["submit"])) {?>
                <tr><td><h3><?php echo $a1; ?></h3></td></tr>
            <?php }?>
            <tr>
                <td><label for="phone">Phone Number</label></td>
                <td><input type="tel" name="phone" required></td>
            </tr>
            <?php if (isset($_POST["submit"])) {?>
                <tr><td><h3><?php echo $a2; ?></h3></td></tr>
                <?php }?>
            <tr>
                <td><input type="submit" name="submit" value="submit" id="submit"></td>
            </tr>
            <?php if (isset($_POST["submit"])) {?>
                <tr><td><h3><?php echo $a3; ?></h3></td></tr>
                <?php }?>
        </table>
    </form>
</body>
</html>
