@extends('layout.app')

@section('body')
	<br>
	@include('todo.partials.message')
	<a href="todo/create" class="btn btn-info">Adicionar</a>
	<div class="col-lg-6 col-lg-offset-3">
		<center><h1>Todo List</h1></center>


		<table class="table list-group col-lg-12">
			<thead>
				<tr>
					<td>Tarefa</td>
					<td>Criada</td>
					<td>Ações</td>
				</tr>
			</thead>
			<tbody>
				@foreach($todos as $todo)
					<tr>
						<td class="col-slg-5">
							<a href="{{'/todo/'.$todo->id}}">{{$todo->title}}</a>
						</td>
						<td class="col">
							<span>{{$todo->created_at->diffForHumans()}}</span>
						</td>
						<td class="col">

							<a href="{{'/todo/'.$todo->id.'/edit'}}" class="btn btn-success">Editar</a>
							<form class="form-group pull-right" action="{{'/todo/'.$todo->id}}" method="post">
								{{csrf_field()}}
								{{ method_field('DELETE') }}
								<button type="submit" class="btn btn-danger">Delete</button>
							</form>

						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection