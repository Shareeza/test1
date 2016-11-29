@extends('layouts.main')

@section('title')
    My Cd list
@endsection

@section('navbar')
    @parent
     | this my cd nav

@endsection

@section('content')
    <h1>Cds List</h1>

    <ul>
        @foreach($cds as $cd)
            <li>{{ $cd->titel }}</li>
        @endforeach
    </ul>
@endsection