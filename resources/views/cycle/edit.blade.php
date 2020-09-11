@extends('layout')
@section('title')
Update / Delete a new cycle
@endsection

@section('mainContent')
	<h1>Update/Delete Cycle</h1>
	<form class="form-horizontal" method="post" action="/cycle/public/cycle/{{$cycle->id}}">
		@csrf
@method('PUT')
		<fieldset>
		<legend></legend>
		<div class="form-group">
			<label class="col-md-4 control-label" for="name"><b>Name</b></label>
			<input type="text" name="name" class="col-md-4 control-label form-horizontal" value={{$cycle->name}}>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="color"><b>Color</b></label>
			<input type="text" name="color" class="col-md-4 control-label form-horizontal" value={{$cycle->color}}>
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="company"><b>Company</b></label>
			<input type="text" name="company" class="col-md-4 control-label form-horizontal" value={{$cycle->company}}>
		</div>
		<div class="form-group text-center">
			<label class="col-md-4 control-label" for="company"></label>	
			<button type="submit" class="btn btn-info form-horizontal">Update</button> 
		</div>

		
		</fieldset>
	</form>

	<form class="form-horizontal" method="post" action="/cycle/public/cycle/{{$cycle->id}}">
				@csrf
@method('delete')
<div class="form-group text-center">
	<label class="col-md-4 control-label" for="company"></label>			
			<button type="submit" name="submit" class="btn btn-primary"> Delete</button> 
		</div>
	</form>

		@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif 
<div>
	<a href="/cycle/public/cycle">Show Cycles</a>
</div>
@endsection