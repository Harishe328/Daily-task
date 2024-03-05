<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        a{
            position: relative;
            left: 900px;
            text-decoration: none;
            color: red;
        }
    </style>
</head>
<body>
    <a href="{{ route('regis') }}">REGISTRATION</a>
    <form action="" method="post">
        @csrf
        <table>
            <tr>
                <td><label for="roll">Roll_Number :</label></td>
                <td><input type="text" name="roll" required></td>
            </tr>
            <tr>
                <td><label for="password">Passsword :</label></td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="login" value="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>
