<!-- <h1>Show Details</h1> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <table border=2>
        <tr>
            <td>Name :</td>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <td>Roll_no :</td>
            <td>{{ $user->roll_no }}</td>
        </tr>
        <tr>
            <td>Class</td>
            <td>{{ $user->class }}</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>{{ $user->total }}</td>
        </tr>
    </table>
    <button><a href="{{ route('pages.showall') }}">Show All</a></button>
</body>
</html>
