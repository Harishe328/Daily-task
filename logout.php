<?php
session_start();
session_unset(); 
session_destroy();
// $email=$_SESSION["Email"];
echo "<h3 style='color:green';>Thank you"."<br>"."logout Successfully</h3>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
    <style>
        body{
            background-image: url("https://media.istockphoto.com/id/1133350536/photo/water-drop-impact.jpg?s=612x612&w=0&k=20&c=r1-DbY1-uzuP8ChpmQCqiUFeopGsyBTqAkauaTQT3WQ=");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>

</body>
</html>