<?php
include("./connection.php");
session_start();
$a1 = "";
$a2 = "";
$a3 = "";
if (isset($_POST["submit"])) {
    if (!preg_match("/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s])([^\s]){8,20}$/m", $_POST["password"])) {
        $a1 = "* Password validation not match";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $a2 = "* Mail ID format is wrong";
    } else {
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $status="Active";

        $sql = "SELECT password FROM reg WHERE email=? AND status=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $status);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // $dname=$row["name"];       
                $dpassword = convert_uudecode($row["password"]);
                if ($dpassword == $pass) {
                    $_SESSION["Email"]=$email;
                    $_SESSION["Password"]=$pass;   
                    // $_SESSION["Name"]=$dname;                
                    header("Location:http://localhost/Daily-task/HomePage.php");
                    // echo $dName,$dAge,$dEmail,$dPhone,$dusername,$dpassword;
                } else {
                    $a3 = "Invalid Password";
                }
            }
        } else {
            echo "Please SIGNIN first";
        }

        $stmt->close();
        $conn->close();

    }
}
?>
