<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use App\Todo;
use DB;

class TodosController extends Controller
{
    public function index()
    {
    	$todos = Todo::all();
    	// 
    	// 
    	// $todos = DB::select('select * from todos');

    	return view('todos')->with('todos', $todos);
    }

    public function store(Request $request)
    {
    	
    	// $todo = Todo::create([
    	// 	'todo' => $request->todo
    	// ]);
    	// 
    	

    	$todo = new Todo;
    	$todo->todo  = $request->todo;
    	$todo->save();
    	
    	Session::flash('success', 'Your todo was created');
    	return redirect()->back();
    	
    	// dd($request->all());
    }

    public function delete($id)
    {
    	$todo = Todo::find($id);
    	$todo->delete();

    	Session::flash('success', 'Your todo was deleted');
    	return redirect()->back();
    }

    public function update($id)
    {
    	$todo = Todo::find($id);

    	return view('update')->with('todo', $todo);
    }

    public function save(Request $request, $id)
	{
		
		$todo = Todo::find($id);
		$todo->todo = $request->todo;
		$todo->save();

    	Session::flash('success', 'Your todo was update');
		return redirect()->route('todos');
	}

	public function completed($id)
	{
		$todo = Todo::find($id);
		$todo->completed = 1;
		$todo->save();

		return redirect()->back();
	}
}
