@extends('layout.app')

@section('body')
	<br>
	<a href="/todo" class="btn btn-info">Voltar</a>
	<div class="col-lg-offset-4 col-lg-4">
		<h1>{{$item->title}}</h1>
		<p>{{$item->body}}</p>
	</div>
@endsection