<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table>
        <tr>
        <td><label for="name">String:</label></td>
        <td><input type="text" name="String"></td>
        </tr>
        <tr>
        <td><input type="submit" name="submit"></td>
        </tr>
        </table>
    </form>

</body>
</html>
<?php
if (isset($_POST["submit"])) {
    $str = $_POST["String"];}
echo $str . "<br>";
// // $str1=strtr($str,"ae","ed");
// // echo $str1."<br>";
$str2 = ucwords($str);
echo $str2 . "<br>";
// // $str3 = addcslashes($str2, "w");
// // echo $str3 . "<br>";
$arr = explode(" ", $str2);
$firstName = $arr[0];
$lastName = $arr[1];
echo "FirstName: ".$firstName . "<br>";
echo "LastName: ".$lastName . "<br>";
// echo "**************************" . "<br>";
// $a = addslashes('What does "yolo" mean?');
// echo ($a) . "<br>";
// $b = "Hello World!";
// // echo $b . "<br>";
// echo str_pad($b, 20, "."). "<br>";
// echo chop($b, "World!"). "<br>";
// echo chunk_split($b, 6, "..."). "<br>";
// echo str_repeat($b, 3) . "<br>";
// echo strcasecmp("Hello world!", "HELLO WORLD!") . "<br>";
// echo str_replace("world", "Harish", $b) . "<br>";
// echo str_ireplace("WORLD", "Harish", $b). "<br>";
// echo str_shuffle($b). "<br>";
// echo strcasecmp("Hello world!", $b). "<br>";
// echo strstr("Hello world!", "world", true). "<br>"; //Hello
// echo strstr("Hello world!", "world", false). "<br>"; //world
// echo substr("Hello world",6,12). "<br>";
 ?>