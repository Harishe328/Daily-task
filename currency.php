<?php
include "./connection.php";
$amountResult = 0;
if (isset($_POST["submit"])) {
    $Amount = $_POST['amount'];
    $code = $_POST['code'];
    $code = strtoupper($code);
    $email = $_POST['email'];
    $status = "Active";
    $arr = array("USA" => 83.4, "SRILANKA" => 0.24, "EURO" => 89.31, "SINGAPORE" => 61.74, "DUBAI" => 22.61);
    $sql = "SELECT email FROM reg WHERE email=? AND status=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $status);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if (array_key_exists($code, $arr)) {
                $amountResult = $Amount * $arr[$code];
            }
        }
    } else {
        if (array_key_exists($code, $arr)) {
            $amountResult = ($Amount * $arr[$code]) - ($Amount*1);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Exchange</title>
    <style>
        body{
            background-image: url("https://cdn.pixabay.com/photo/2017/01/25/12/31/bitcoin-2007769_960_720.jpg");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;

        }
        table{
            color:red;
            font-size: large;
            font-weight: bold;
        }
    </style>
</head>
<body>
   <form action="" method="post" id="form">
    <table>
    <tr>
        <td><label for="amount">Amount :</label></td>
        <td><input type="number" name="amount" required></td><br>

    </tr>
    <tr>
        <td><label for="countrycode">Country code:</label></td>
        <td><select name="code" required>
            <option value="" disabled selected>Select any option</option>
            <option value="usa">USA</option>
            <option value="Srilanka">SL</option>
            <option value="euro">European Country</option>
            <option value="singapore">Singapore</option>
            <option value="dubai">Dubai</option>
        </select></td><br>
    </tr>
    <tr>
        <td><label for="email">Email </label></td><br>
        <td><input type="mail" name="email" required></td>
    </tr>
    <tr>
        <td><input type="submit" name="submit"></td>
    </tr>
    <?php if (isset($_POST["submit"])) {?>
    <tr>
        <td><label for="ans">ans :</label></td>
        <td><input type="text" name="ans" value="<?php echo $amountResult; ?>"></td>
    </tr>

    <?php }?>
    </table>
   </form>
</body>
</html>