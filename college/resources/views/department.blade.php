@extends('layout.taskbar')
<style>
    body{
        background-color: black;
    }
    .table{
        color: whitesmoke;
        width: 30%;
        margin-left: 400px;
        margin-top: 40px;
    }
    .btn{
        margin-top: 40px;
        margin-left: 600px;
        padding: 5px auto;
    }
</style>
@section('content')
<form  method="post">
<table border=2px class="table">
        @csrf
        @method('PUT')
    <tr>
        <th>S.NO</th>
        <th>Department</th>
        <th>D_shortterm</th>
        <th>Delete</th>
    </tr>
    @php
    $s_no=1;
    @endphp
    @foreach($result as $u)
    <tr>
         <td>{{$s_no++ }}</td>
         <td>{{ $u->department }}</td>
         <td>{{ $u->d_shortterm }}</td>
         <td><a href="/delete_dept/{{ $u->department }}" style="text-decoration:none;color:red" onclick="return confirm('Are you sure you want add department?')">DELETE</a></td>
    </tr>  
@endforeach  
</table>
</form>
<button class="btn"><a style="text-decoration:none" href="/d_adding">ADD</a></button>
@endsection