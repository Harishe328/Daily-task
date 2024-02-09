<?php
include("./connection.php");
$a1 = "";
$a2 = "";
$a3 = "";
$a4 = "";
$a5 = "";
$a6 = "";
$a7 = "";

// $name = "";
// $age = "";
// $email = "";
// $phone = "";
// $uName = "";
// $password = "";
if (isset($_POST["submit"])) {

    if (!preg_match("/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s])([^\s]){8,20}$/m", $_POST["password"])) {
        $a1 = "* Password validation not match";
    } elseif ($_POST["password"] != $_POST["cpassword"]) {
        $a7 = "* Password and Confirm Password should same";
    } elseif (!preg_match("/^[a-zA-Z]+$/", $_POST["name"])) {
        $a2 = "* Name Should contain only Alphabets" . "<br>";
    } elseif (!preg_match("/^[a-zA-Z]+$/", $_POST["username"])) {
        $a3 = "* Username Should contain only Alphabets" . "<br>";
    } elseif (strlen($_POST["phone"]) != 10) {
        $a4 = "* Phone Number should contain ten number";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $a5 = "* Mail ID format is wrong";
    } elseif ($_POST["age"] > 150) {
        $a6 = "Man cannot survive";
    } else {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $uName = $_POST["username"];
        $password = convert_uuencode($_POST["password"]);
        $status="Active";

    // $servername = "localhost";
    // $dbusername = "root";
    // $dbpassword = "admin@123";
    // $dbname = "Registrationform";

    // $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }

    $stmt = $conn->prepare("insert into reg(name, age, email, phone_number, username, password, status)
    values(?,?,?,?,?,?,?)");
    $stmt->bind_param('sisssss', $name, $age, $email, $phone, $uName, $password, $status);
    $stmt->execute();
    echo "<h3 style='color:white'>New records created successfully</h3>";
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
    <title>Registration Form</title>
    <style>
        body{
           background-image: url("https://cdn.pixabay.com/photo/2024/01/05/16/04/rocks-8489732_960_720.jpg");
           background-repeat: no-repeat;
           background-size: cover;
        }
        h3{
            color:red;
        }
        #btn{
            /* background-color: green; */
            border:1px solid black;
            padding: 3px;
            color:red;
        }
        table{
            position: relative;
            top: 50px;
            left:400px;
            border: 2px solid red;
            color:white;
            /* background-color: pink; */
        }
    </style>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td><label for="name">Name :</label></td>
                <td><input type="text" name="name" required></td><br>
                <?php if (isset($_POST["submit"])) {?>
                <td><h3><?php echo $a2; ?></h3></td>
                <?php }?>
            </tr>
            <tr>
                <td><label for="age">Age :</label></td>
                <td><input type="number" name="age" required></td><br>
                <?php if (isset($_POST["submit"])) {?>
                <td><h3><?php echo $a6; ?></h3></td>
                <?php }?>
            </tr>
            <tr>
                <td><label for="email">Email :</label></td>
                <td><input type="mail" name="email" required></td><br>
                <?php if (isset($_POST["submit"])) {?>
                <td><h3><?php echo $a5; ?></h3></td>
                <?php }?>
            </tr>
            <tr>
                <td><label for="phone">Phone Number :</label></td>
                <td><input type="tel" name="phone" required></td><br>
                <?php if (isset($_POST["submit"])) {?>
                <td><h3><?php echo $a4; ?></h3></td>
                <?php }?>
            </tr>
            <tr>
                <td><label for="Username">Username :</label></td>
                <td><input type="text" name="username" required></td><br>
                <?php if (isset($_POST["submit"])) {?>
                <td><h3><?php echo $a3; ?></h3></td>
                <?php }?>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" name="password" required></td><br>
                <?php if (isset($_POST["submit"])) {?>
                <td><h3><?php echo $a1; ?></h3></td>
                <?php }?>
            </tr>
            <tr>
                <td><label for="cpassword">Confirm Password :</label></td>
                <td><input type="password" name="cpassword" required></td><br>
                <?php if (isset($_POST["submit"])) {?>
                <td><h3><?php echo $a7; ?></h3></td>
                <?php }?>
            </tr>
            <tr>
                <td><input id="btn" type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>