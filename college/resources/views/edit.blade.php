@extends('layout.taskbar')
<style>
    body{
        background-color: black;
    }
    .div1{
        position: relative;
        top:200px;
        left:500px;
        /* border:2px solid red; */
    }
    label{
        color:whitesmoke;
    }
    .i1{
        position: relative;
        margin-top: 15px;
        left:150px;
    }
    td{
        color:red;
    }
</style>
@section('content')
<div class=div1>
<form action="/edit/{{$result['email']}}" method="post">
    <table>
        @csrf
        @method('put')
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" name="mail" value="{{$result['email']}}" readonly></td>
        </tr>
        <tr>
            <td><label for="dept">Department:</label></td>
            <td><input type="text" name="dept" value="{{$result['department']}}" readonly></td>
        </tr>
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" name="name" value="{{$result['name']}}" required> *</td>
        </tr>
        <tr>
            <td><label for="phone">Phone:</label></td>
            <td><input type="tel" name="phone" value="{{$result['phone']}}" required> *</td>
        </tr>
        <tr><td><input type="submit" value="update" class="i1"></td></tr>
    </table>
</form>
</div>
@endsection
