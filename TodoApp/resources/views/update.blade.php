@extends('layout')

@section('content')

	

	<div class="jumbotron">
		<div class="container" style="background: white;">
			<h1 align="center">Todo App</h1>
			<br>
			<div class="row">
				<div class="col-lg-12">
					<form action="{{route('todo.save',['id' => $todo->id])}}" method="post">
						{{csrf_field()}}
						<input type="text" name="todo" class="form-control input-lg" placeholder="Create Todos" value="{{$todo->todo}}">
					</form>
				</div>
			</div>
		</div>
	</div>

	<hr>

    
@stop