@extends('layout')

@section('content')

	<div class="jumbotron">
		<div class="container" style="background: white;">
			<h1 align="center">Todo App</h1>
			<br>
			<div class="row">
				<div class="col-lg-12">
					<form action="/create/todo" method="post">
						{{csrf_field()}}
						<input type="text" name="todo" class="form-control input-lg" placeholder="Create Todos">
					</form>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-10">
					<a href="#">Total Task <span class="badge">@php echo count($todos) @endphp</span></a>
				</div>
			</div>
			<br>
			<div class="row">
				<h4>Not Completed</h4>
				<table class="table">

					@foreach ($todos as $todo)
				    @if(!$todo->completed)
					<tr>
						<td>{{$todo->todo}}</td>
						<td>
							<a href="{{route('todo.delete',['id' => $todo->id])}}" class="btn btn-danger"> x </a> | <a href="{{route('todo.update',['id' => $todo->id])}}" class="btn btn-primary btn-xs"> update </a> | <a href="{{route('todos.completed', ['id' =>$todo->id])}}" class="btn btn-success btn-xs">Mark as Complete  </a>
						</td>
					</tr>
					@else
					@endif
					@endforeach
				</table>
			</div>
			<div class="row">
				<h4>Completed</h4>
				<table class="table">
					@foreach ($todos as $todo)
				    @if($todo->completed)
					<tr>
						<td>{{$todo->todo}}</td>
						<td>
							<a href="{{route('todo.delete',['id' => $todo->id])}}" class="btn btn-danger"> x </a> | <span class="text-success">	Completed</span>
						</td>
					</tr>
					@else
					@endif
					@endforeach
				</table>
			</div>
		</div>
	</div>
	

    
@stop