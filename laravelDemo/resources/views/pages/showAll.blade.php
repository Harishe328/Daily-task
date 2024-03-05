<!-- <h1>Hi</h1> -->
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
        <th>NAME</th>
        <th>ROLL_NO</th>
        <th>CLASS</th>
        <th>TOTAL</th>
        <th>EDIT</th>
</tr>
    @foreach($user as $u)
    <tr>
         <td>{{ $u->name }}</td>
         <td>{{ $u->roll_no }}</td>
         <td>{{ $u->class }}</td>
         <td>{{ $u->total }}</td>
         <td><a href="/update/{{ $u->roll_no }}">EDIT</a></td>
    </tr>  

    @endforeach   
    </table>
</body>
</html>