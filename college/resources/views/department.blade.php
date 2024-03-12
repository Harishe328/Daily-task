@extends('layout.taskbar')
<style>
    body{
        background-color: black;
    }
    .table{
        color: whitesmoke;
        width: 30%;
        margin-left: 450px;
        margin-top: 40px;
    }
    .btn{
        margin-top: 40px;
        margin-left: 600px;
        padding: 5px auto;
    }
</style>
@section('content')
<table border=2px class="table">
    <tr>
        <th>S.NO</th>
        <th>Department</th>
        <th>D_shortterm</th>
    </tr>
    @foreach($result as $u)
    <tr>
         <td>{{ $u->id }}</td>
         <td>{{ $u->department }}</td>
         <td>{{ $u->d_shortterm }}</td>
         <td><a href="">DELETE</a></td>
    </tr>  
@endforeach  
</table>
<button class="btn"><a style="text-decoration:none" href="/d_add">ADD</a></button>
@endsection