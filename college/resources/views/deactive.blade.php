@extends('layout.taskbar')
<style>
    body{
            background-color: black;
        }
        table{
            position: relative;
            top:50px;
            left:300px;
            color: whitesmoke;
            text-align: center;
        }
        a{
            text-decoration: none;
            color:red;
        }
</style>
@section('content')
<table border=5>
    <tr>
        <th>Email</th>
        <th>Name</th>
        <th>Department</th>
        <th>Phone</th>
        <th>Modification</th>
    </tr>
    @foreach($result as $u)
    <tr>
         <td>{{ $u->email }}</td>
         <td>{{ $u->name }}</td>
         <td>{{ $u->department }}</td>
         <td>{{ $u->phone }}</td>
         <td><a href="/retrive/{{ $u->email }}">Retrived</a></td>
    </tr>  

    @endforeach  
</table>
@endsection