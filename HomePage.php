<?php
$dName="";
$dAge="";
$dEmail="";
$dPhone="";
$dusername="";
$dpassword ="";
include("./connection.php");
session_start();
$email=$_SESSION["Email"];


$sql = "SELECT * FROM reg WHERE email=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dName=$row["name"];
        $dAge=$row["age"];
        $dEmail=$row["email"];
        $dPhone=$row["phone_number"];
        $dusername=$row["username"];
        // $dpassword = $row["password"];
    }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <style>
        
        h3{
            position: relative;
            color:blueviolet;
            font-family: 'Times New Roman', Times, serif;
            font-size: larger;
            left: 550px;
        }
        a{
            position: relative;
            left: 900px;
            color:red;
        }

        table{
            position: relative;
            left: 470px;
            color: white;
        }
        body{
            background-color: black;
        }
    </style>
</head>
<body>
    <h3>Hi <?php echo $dusername?></h3>
    <h3>Welcome to HomePage</h3>
    <a href="http://localhost/Daily-task/profileupdate.php">Update Profile</a>
    <a href="http://localhost/Daily-task/logout.php">logout</a>
    <a href="http://localhost/Daily-task/delete.php">Delete Profile</a>
    <table border="5">
        <tr>
            <td>Name</td>
            <td><?php echo $dName?></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><?php echo $dAge?></td>
        </tr>
        <tr>
            <td>Email Id</td>
            <td><?php echo $dEmail?></td>
        </tr>
        <tr>
            <td>Phone Number</td>
            <td><?php echo $dPhone?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><?php echo $dusername?></td>
        </tr>
        <!-- <tr>
            <td>Password</td>
            <td><?php echo $dpassword?></td>
        </tr> -->
    </table>
</body>
</html>