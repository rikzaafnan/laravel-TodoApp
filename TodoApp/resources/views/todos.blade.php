@extends('layout')

@section('content')

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="/create/todo" method="post">
				{{csrf_field()}}
				<input type="text" name="todo" class="form-control input-lg" placeholder="Create Todos">
			</form>
		</div>
	</div>

	<hr>

    @foreach ($todos as $todo)
        {{$todo->id}}. {{$todo->todo}} <a href="{{route('todo.delete',['id' => $todo->id])}}" class="btn btn-danger"> x </a>
        <a href="{{route('todo.update',['id' => $todo->id])}}" class="btn btn-primary btn-xs"> update </a>
		@if(!$todo->completed)
        	<a href="{{route('todos.completed', ['id' =>$todo->id])}}" class="btn btn-success btn-xs">Mark as Complete  </a> 	
		@else
			<span class="text-success">	Completed</span>
		@endif
        <hr>
    @endforeach
@stop