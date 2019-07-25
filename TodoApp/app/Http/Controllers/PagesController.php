<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function new()
	{
		echo "some data";
		return view('new');
	}


	// Todos - todo
}
