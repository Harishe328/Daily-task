 <?php
$cookie_name = "user";
$cookie_value = "Harish";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
setcookie("user", "", time() - 0);
?>
<html>
<body>

<?php
// if(!isset($_COOKIE[$cookie_name])) {
//   echo "Cookie named '" . $cookie_name . "' is not set!";
// } else {
//   echo "Cookie '" . $cookie_name . "' is set!<br>";
//   echo "Value is: " . $_COOKIE[$cookie_name];
// }
echo "Cookies is deleted";
?>

</body>
</html> 