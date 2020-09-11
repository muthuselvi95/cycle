@extends('layout')

@section('mainContent')
	<h1>Show Cycle</h1>
	<div style="color:{{$cycle->color}}">
		<h1><strong>{{$cycle->name}}</strong></h1><br>
		
	</div>
	<p>
		<strong>{{$cycle->company}}</strong><br>
	</p>
	<a href="{{$cycle->id}}/edit">Edit</a>
@endsection