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
        }
        a{
            text-decoration: none;
            color:red;
        }
        span{
            position: relative;
            color:red;
            left:40%;
        }
    </style>

@section('content')
<span>
<form action="/filter/{{'Teacher'}}">
<tr>
    <td><label for="filter">Filter  </label></td>
    <td><select id="filter" name="filter">
        <option value="ELECTRICIAL_AND_ELECTRONICS">EEE</option>
        <option value="MECHANICAL">MECH</option>
        <option value="ELECTRICIAL_AND_COMMICATION">ECE</option>
        <option value="CIVIL">CIVIL</option>
        <option value="COMPUTER_SCIENCE">CSE</option>
    </select></td>
    <td id="i1"><input  type="submit"  value="APPLY"></td>
    <td><a href="/teacher">Cancel</a></td>
    </tr>
</form>
</span>
<table border=5>
    <tr>
        <th>Email</th>
        <th>Name</th>
        <th>Department</th>
        <th>Phone</th>
        <th>EDIT</th>
        @php
           $roll=session('result.roll'); 
           @endphp
        @if($roll!='Teacher')
        <th>DELETE</th>
        @endif
    </tr>
    @foreach($result as $u)
    <tr>
         <td>{{ $u->email }}</td>
         <td>{{ $u->name }}</td>
         <td>{{ $u->department }}</td>
         <td>{{ $u->phone }}</td>
         <td><a href="/editshow/{{ $u->email }}">EDIT</a></td>
         @if($roll!='Teacher')
         <td><a href="/delete/{{ $u->email }}">DELETE</a></td>
         @endif
    </tr>  

    @endforeach  
</table>
@endsection