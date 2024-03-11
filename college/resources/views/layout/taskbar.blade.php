<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        header{
            display:flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            background-color: black;
            height: 3rem;
            gap:2rem;
        }
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
        }
        .collge h3{
            color:white;
        }
        .navbar a{
            list-style: none;
            text-decoration: none;
            color:red;
            margin-right:2rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="collge">
            <h3>Clarity College of Engineering</h3>
        </div>
        <div class="navbar">
            <a href="/show" >Home</a>
           <a href="/about" >About us</a>
           @php
           $roll=session('result.roll');
           @endphp
            @if($roll!='Student')
             <a href='/showAll'  style="color: red;">Show All</a>
             @if($roll!='Teacher')
             <a href='/teacher'  style="color: red;">Teacher</a>
             <a href='/deactive'  style="color: red;">Deactive</a>
            @endif
           @endif
           <a href="/signout" >Sign Out</a>
        </div>
    </header>
    </div>
    @yield('content')
</body>
</html>
