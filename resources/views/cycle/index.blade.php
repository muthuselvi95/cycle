@extends('layout')

@section('title')
Cycle Lists
@endsection

@section('mainContent')
	<h1>List Cycle</h1>
	<div>
		<a href="/cycle/public/cycle/create">Add Cycles</a>
	</div>
	<table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Color</th>
        <th>Company</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($cycle as $cycles)
      <tr>
        <td><a href="cycle/{{$cycles->id}}"> {{ $cycles->name }}</a></td>
        <td>{{ $cycles->color }}</td>
        <td>{{ $cycles->company }}</td>
        <td><a href="cycle/{{$cycles->id}}/edit">Edit</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection