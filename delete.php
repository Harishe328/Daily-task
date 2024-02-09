<?php
include("./connection.php");
session_start();
if (isset($_POST["submit"])) {
    $delemail=$_POST["delemail"];
    $delpassword=$_POST["delpassword"];
    $status="Deleted";
    
    if($delemail==$_SESSION["Email"] && $delpassword==$_SESSION["Password"]){
        // echo "****";
        // echo $_SESSION["Email"] ,$_SESSION["Password"];
        $stmt = $conn->prepare("UPDATE reg SET status=? WHERE email=?");
        $stmt->bind_param('ss', $status, $delemail);
        $stmt->execute();
        // echo "Deleted successfully";
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
    <title>Delete</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="email">Email :</label></td>
                <td><input type="mail" name="delemail" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="delpassword" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="submit" value="CONFIRE"></td>
            </tr> 
            <?php if (isset($_POST["submit"])) {?>
            <tr><td><h3><?php echo "Deleted Successfully"; ?></h3></td></tr>
            <?php }?>
        </table>
    </form>
</body>
</html>