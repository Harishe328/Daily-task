@extends('layout.taskbar')

    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    @section('content')
    <div class='div1'>
    <table>
        <tr>
            <td style='text-align:justify'>Name:</td>
            <td>{{session('result.name')}}</td>
        </tr>
        <tr>
            <td>Department:</td>
            <td>{{session('result.department')}}</td>
        </tr>
    </table>
    </div>  
    @endsection  
