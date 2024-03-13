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
    .input{
        margin-left:150px;
        margin-top: 20px;
    }
</style>
@section('content')
<form action="{{route('d_add')}}" method="post">
    <table class="table">
    @csrf
        <tr>
            <td><label for="department">Department</label></td>
            <td><input type="text" name="department" required></td>
        </tr>
        <tr>
            <td><label for="d_st">Department Short Term</label></td>
            <td><input type="text" name="d_st" required></td>
        </tr>
        <tr>
            <td><input type="submit" value="ADD" class="input" onclick="return confirm('Are you sure you want add department?')"></td>
        </tr>
    </table>
</form>    
@endsection