<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: black;
        }
        table{
            border:2px;
            color:whitesmoke;
            margin-left: 500px;
            margin-top: 230px;
        }
    </style>
</head>
<body>
    <form action="{{route('register')}}" method="post">
    <table>
        @csrf
        <tr>
            <td><label for="name">Name :</label></td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td><label for="phone">Phone :</label></td>
            <td><input type="tel" name="phone" required></td>
        </tr>
        <tr>
            <td><label for="dept">Department :</label></td>
            <td><select id="dept" name="dept">
            @foreach($result as $u)
                <option value='{{ $u->department }}'>{{ $u->d_shortterm }}</option>
                @endforeach 
            </select></td>
        </tr>
        <tr>
            <td><label for="roll">Roll :</label></td>
            <td><select id="roll" name="roll">
                <option value="Student">STUDENT</option>
                <option value="Teacher">TEACHER</option>
                <option value="Principle">PRINCIPLE</option>
            </select></td>
        </tr>
        <tr>
            <td><label for="total">Email :</label></td>
            <td><input type="email" name="email" required></td>
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