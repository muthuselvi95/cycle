@extends('layout')

@section('title')
Create a new cycle
@endsection

@section('mainContent')
	<h1>Create Cycle</h1>

	<form class="form-horizontal" method="post" action="/cycle/public/cycle">
		@csrf
		<fieldset>
		<legend></legend>
		<div class="form-group">
			<label class="col-md-4 control-label" for="name"><b>Name</b></label>
			<input type="text" name="name" class="col-md-4 control-label form-horizontal">
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="color"><b>Color</b></label>
			<input type="text" name="color" class="col-md-4 control-label form-horizontal">
		</div>
		<div class="form-group">
			<label class="col-md-4 control-label" for="company"><b>Company</b></label>
			<input type="text" name="company" class="col-md-4 control-label form-horizontal">
		</div>
		<div class="form-group text-center">		
			<input type="submit" class="btn btn-info col-md-2 form-horizontal" value="Submit">
		</div>
	</fieldset>	
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