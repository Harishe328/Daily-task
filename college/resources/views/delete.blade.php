@extends('layout.taskbar')
<style>
    body{
        background-color: black;
        
    }
    .d1{
        
        position: absolute;
        /* border: 2px solid red; */
        height: 100px;
        width:300px;
        top:40%;
        left: 40%;
    } 
    label{
        color:white;
    }
    #a1{
        position: relative;
        top: 15px;
        left: 100px;
    }
</style>
@section('content')
<div class="d1">
<form action="/del" method='post'>
    @csrf
    @method('put')
    <table>
        <tr>
            <td><label for="email">Email :</label></td>
            <td><input type="email" name="email" value ="{{$email}}" required></td>
        </tr>
        <tr>
            <td id="a1"><input type="submit" value="Delete" ></td>
        </tr>
    </table>
</form>
</div>
@endsection