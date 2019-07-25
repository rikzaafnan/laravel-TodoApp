@extends('layout')

@section('content')

	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="{{route('todo.save',['id' => $todo->id])}}" method="post">
				{{csrf_field()}}
				<input type="text" name="todo" class="form-control input-lg" placeholder="Create Todos" value="{{$todo->todo}}">
			</form>
		</div>
	</div>

	<hr>

    
@stop