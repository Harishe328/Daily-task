<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action="formhandling.php" method="get">
        <label for="name" >Name :</label>
        <input type="text" name="name"><br>
        <label for="email">Email:</label>
        <input type="mail" name="email"><br>
        <input type="submit">
    </form>
    <?php
    echo $_GET["name"]." ". $_GET["email"];
    ?>
</body>
</html>

