<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/update/{{$data->roll_no}}" method="post">
        <table>
            @csrf
            @method('put')
            <tr>
                <td><label for="roll">Roll_no :</label></td>
                <td><input type="text" name="roll" readonly value="{{$data->roll_no}}"></td>
            </tr>
            <tr>
                <td><label for="name">Name :</label></td>
                <td><input type="text" name="name" value="{{$data->name}}"></td>
            </tr>
            <tr>
                <td><label for="mark">Total :</label></td>
                <td><input type="text" name="total" value="{{$data->total}}"></td>
            </tr>
            <tr>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>


