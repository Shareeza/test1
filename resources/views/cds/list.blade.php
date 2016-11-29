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
	
    <a href="{{ url('/cds/create') }}">Add cd</a>

    <ul>
        @foreach($cds as $cd)
            <li><a href="{{ url('/cd', $cd->id) }}">{{ $cd->titel }}</a>
			<a href="{{ url('/cd/delete',$cd->id) }}">Delete</a>
			<a href="{{ url('/cd/updateForm',$cd->id) }}">Update</a>
			</li>
        @endforeach
    </ul>
@endsection



