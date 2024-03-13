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
        .btn{
            color: whitesmoke;
            border: 1px solid;
            margin-left: 550px;
        }
        .pagination p{
            color: #fff;
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
    <form action="/filter/{{'Student'}}">
    <tr>
        <td><label for="filter" id="f2">Filter  </label></td>
        <td><select id="filter" name="filter">
        @foreach($result1 as $u1)
                <option value='{{ $u1->department }}'>{{ $u1->d_shortterm }}</option>
                @endforeach 
        </select></td>
        <td id="i1" class="inputs"><input  type="submit" value="APPLY"></td>
        <td class="inputs"><button><a href="/showAll">Cancel</a></button></td>
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
         <td id="email">{{ $u->email }}</td>
         <td id='name'>{{ $u->name }}</td>
         <td>{{ $u->department }}</td>
         <td id='phone'>{{ $u->phone }}</td>
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
$(document).ready(function() {
    $('#myInput1').on('keyup', function() {
    var value = $(this).val().toLowerCase();
    $('#mytable tbody #ans').each(function() {
      var rowEmail = $(this).find('#email').text().toLowerCase(); 
      if (rowEmail.includes(value)) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });
});
$(document).ready(function() {
    $('#myInput2').on('keyup', function() {
    var value = $(this).val().toLowerCase();
    $('#mytable tbody #ans').each(function() {
      var rowEmail = $(this).find('#phone').text().toLowerCase(); 
      if (rowEmail.includes(value)) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });
});
$(document).ready(function() {
    $('#myInput3').on('keyup', function() {
    var value = $(this).val().toLowerCase();
    $('#mytable tbody #ans').each(function() {
      var rowEmail = $(this).find('#name').text().toLowerCase(); 
      if (rowEmail.includes(value)) {
        $(this).show();
      } else {
        $(this).hide();
      }
    });
  });
});
</script>
@endsection
