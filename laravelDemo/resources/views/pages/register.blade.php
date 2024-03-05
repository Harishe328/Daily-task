<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        a{
            position:relative;
            left:900px;
            color:red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <a href="/">BACK</a>
    <form action="{{route('register')}}" method="post" >
        <table>
            @csrf
            <tr>
                <td><label for="name">Name :</label></td>
                <td><input type="text" name="name" required></td>
            </tr>
            <tr>
                <td><label for="roll">Roll_Number :</label></td>
                <td><input type="text" name="roll" required></td>
            </tr>
            <tr>
                <td><label for="class">Class :</label></td>
                <td><input type="text" name="class" required></td>
            </tr>
            <tr>
                <td><label for="total">Total Marks :</label></td>
                <td><input type="text" name="total" required></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="save" value="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>