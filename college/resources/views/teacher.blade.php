@extends('layout.taskbar')
<script src="https://cdn.tailwindcss.com"></script> 
    <style>
        body{
            background-color: black;
        }
        .tbl-container{
            width: 70%;
            margin: 10px auto;
        }
        .nav_block{
            display: flex;
            justify-content: space-between;
            margin: 20px auto;
        }
        .table{
            color: whitesmoke;
            border: 1px solid;
            border-collapse: collapse;
        }
        .table td , .table th{
            border: 1px solid;
        }
        form [type="submit"], form button{
            background-color: #fff;
        }
        a{
            text-decoration: none;
            color:red;
        }
        #f2{
            color:white
        }
        #myinput1{
            /* border-radius: 15px; */
            margin-left: 5px;
            max-width: 100px;
        }
        #myinput2{
            /* border-radius: 15px; */
            margin-left: 5px;
            max-width: 100px;
        }
        #myinput3{
            /* border-radius: 15px; */
            margin-left: 5px;
            max-width: 100px;
        }
        .pagination p{
            color: #fff;
        }
        .btn{
            color: whitesmoke;
            border: 1px solid;
            margin-left: 550px;
        }
    </style>

@section('content')
<div class="tbl-container nav_block">
    <div class="f1">
        <table>
            <tr id='f3' >
                <td><label for="searchemail" id='f2'>Email:</label></td>
                <td><input type="text" name="search" id="myInput1"></td>
            
                <td><label for="searchnumber" id='f2'>Phone:</label></td>
                <td><input type="text" name="searchnumber" id="myInput2"></td>
            
                <td><label for="searchname" id='f2'>Name:</label></td>
                <td><input type="text" name="searchname" id="myInput3"></td>
            </tr>
        </table>
    </div>
    <span>
    <form action="/filter/{{'Teacher'}}">
    <tr>
        <td><label for="filter" id="f2">Filter  </label></td>
        <td><select id="filter" name="filter">
            <option value="ELECTRICIAL_AND_ELECTRONICS">EEE</option>
            <option value="MECHANICAL">MECH</option>
            <option value="ELECTRICIAL_AND_COMMICATION">ECE</option>
            <option value="CIVIL">CIVIL</option>
            <option value="COMPUTER_SCIENCE">CSE</option>
        </select></td>
        <td id="i1" class="inputs"><input  type="submit" value="APPLY"></td>
        <td class="inputs"><button><a href="/teacher">Cancel</a></button></td>
        </tr>
    </form>
    </span>
</div>

<div class="tbl-container">
<table border=5 id="mytable" width=100% class="table">
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
    <tr id="ans">
         <td>{{ $u->email }}</td>
         <td>{{ $u->name }}</td>
         <td>{{ $u->department }}</td>
         <td>{{ $u->phone }}</td>
         <td><a href="/editshow/{{ $u->email }}">EDIT</a></td>
         @if($roll!='Teacher')
         <td><a href="/del/{{ $u->email }}" onclick="return confirm('Are you sure you want to delete?')">DELETE</a></td>
         @endif
    </tr>  

    @endforeach  
</table>
</div>
@if($result->count())
    <div class="tbl-container pagination">
        {{$result->links()}}
    </div>
@endif    
@if($roll='Principle')
<button class="btn"><a href="/adding">Add student</a></button>
@endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#mytable #ans").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
@endsection
