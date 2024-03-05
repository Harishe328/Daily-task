@extends('lay.app')

@section('content')
    <h3 style="color:blue">Hello world</h3>
    <h3>Hello Earth</h3>
    <h3>{{$title}}</h3>
    @if(count($services)>0)
    <ul>
        @foreach($services as $service)
            <li>{{$service}}</li>
        @endforeach
    </ul>
    @endif
@endsection
<!-- @section('content1')
<h1>{{"hello"}}</h1>
@endsection -->