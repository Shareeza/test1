@extends('layouts.main')

@section('title')
    My Cd list
@endsection

@section('navbar')
    @parent
     | this my cd nav

@endsection

@section('content')
    <h1>Add Cds List</h1>
	<form  action="{{ url('cds/store') }}">
   {{ csrf_field() }}
    Title: <input type="text" name="titel" value=""><br />
    interpret: <input type="text" name="interpret" value=""><br />
    jahr: <input type="text" name="jahr" value=""><br />
    <input type="submit" value="Add Cd" />
</form>
	
		 

    
@endsection
