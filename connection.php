<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "admin@123";
$dbname = "Registrationform";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>