@extends('layout.app')

@section('body')

	<br>
	<a href="/todo" class="btn btn-info">Back</a>
	<div class="col-lg-4 col-lg-offset-4">
		<h1>{{substr(Route::currentRouteName(),5)}} for ToDo List</h1>

		<form class="form-horizontal" action="/todo/@yield('editId')" method="POST">
			{{csrf_field()}}
			@section('editMethod')
				@show
		  <fieldset>
		    <div class="form-group">
		      <div class="col-lg-10">
		      	<input type="text" name="title" class="form-control" value="@yield('editTitle')" placeholder="title">
		      	<br>
		      </div>

		      <div class="col-lg-10">
		        <textarea class="form-control" name="body" rows="5" id="textArea" placeholder="body">@yield('editBody')</textarea>
		        <br>
		        <button type="submit" class="btn btn-success">Submit</button>
		      </div>
		    </div>
		  </fieldset>
		</form>
		@include('todo.partials.errors')
	</div>

@endsection