<?php

namespace App\Http\Controllers;

use App\Models\Radio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
	public function index()
	{
		$page = request()->get('item') ?? 25;

		$order = request()->get('order') ? 'asc' : 'desc';

		$column = request()->get('column') ? request()->get('column') : 'time';

		$radio = Radio::orderBy($column, $order);

		if (request('search')) {
			if (request('category') == "all") {
				$radio->where('time', 'like', '%' . request('search') . '%')
					->orWhere('frequency', 'like', '%' . request('search') . '%')
					->orWhere('state', 'like', '%' . request('search') . '%')
					->orWhere('destination', 'like', '%' . request('search') . '%')
					->orWhere('status', 'like', '%' . request('search') . '%')
					->orWhere('station_id', 'like', '%' . request('search') . '%')
					->orWhere('ber', 'like', '%' . request('search') . '%')
					->orWhere('sn', 'like', '%' . request('search') . '%');
			} else {
				$radio->where(request('category'), 'like', '%' . request('search') . '%');
			}
		}

		$thead = Schema::getColumnListing('radios');
		$ignore = ['id', 'created_at', 'updated_at'];
		for ($i = 0; $i < count($ignore); $i++) {
			$key = array_search($ignore[$i], $thead);
			unset($thead[$key]);
		}

		return view('home', [
			'radios' => $radio->paginate($page),
			'columns' => $thead,
		]);
	}

	public function radio()
	{
		dd(request()->all());
	}
}
