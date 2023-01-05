<?php

namespace App\Http\Controllers;

use App\Models\Radio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index()
	{
		$radio = Radio::orderBy('time', 'asc')->paginate(150);
		return view('home', ['data' => $radio]);
	}
}
