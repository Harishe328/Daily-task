<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <a href="/register">Registration</a>
    <div class="main">
    <form action="/display" method="post">
        @csrf
        <table>
            <tr>
                <td><label for="email">Email :</label></td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td><label for="password">Passsword :</label></td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="login" value="login" id="submit"></td>
            </tr>
        </table>
    </form>
    </div>    
</body>
</html>
