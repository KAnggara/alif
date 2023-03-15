<?php

namespace App\Http\Controllers;

use App\Models\Radio;
use App\Models\Station;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
	public function index()
	{
		$select = ['sn', 'ber', 'time', 'state', 'status', 'frequency'];

		$stationsIdObj = Radio::select('station_id')
			->whereRaw('LENGTH(station_id) > 4')
			->groupBy('station_id')
			->get();

		// return $stationsIdObj;


		// STASIUN_DATA={''};
		// STASIUN_ALE={'BANDUNG','PAMENGPEUK','SUMEDANG','WATUKOSEK','PEKANBARU','PONTIANAK','MANADO','BIAK','KUPANG'};

		$stationsId = ['YD0OXH', 'YD0OXH1', 'YD0OXH1A', 'YD0OXH3', 'YD0OXH5', 'YD0OXH7', 'YD0OXH8', 'YD0OXH9', 'YD0OXH9A'];
		// foreach ($stationsIdObj as $obj) {
		// 	array_push($stationsId, $obj->station_id);
		// }
		// return $stationsId;

		$location = [];

		foreach ($stationsId as $id) {
			$locations = Station::select('location', 'station_id')
				->where('station_id', $id)
				->first();
			array_push($location, $locations);
		}
		// return $location;

		foreach ($stationsId as $id) {
			$radio[$id] = Radio::select($select)
				->where('station_id', $id)
				->limit(100)
				->get();
		}

		// return $radio;

		return view('home', [
			'radios' => $radio,
			// 'stationsId' => $stationsId,
			'locations' => $location,
			// 'columns' => $thead,
		]);

		// $stationId[1] = Radio::select($select)
		// 	->where('station_id', $stationId[1])
		// 	->limit(10)
		// 	->get();

		// for ($i = 0; $i < count($stationId); $i++) {
		// 	$data[$i] = $stationId[$i]->station_id;
		// 	if (preg_match('/[a-z]/i', $data[$i]) && strlen($data[$i]) > 4) {
		// 		// echo gettype($data[$i]) . ':' . $data[$i] . '<br>';
		// 	}
		// 	array_push($sta, $data[$i]);
		// }
		// return gettype($stationId);
		// return $stationId[1];

		$page = request()->get('item') ?? 25;

		$order = request()->get('order') ? 'asc' : 'desc';

		$column = request()->get('column') ? request()->get('column') : 'time';

		$radio = Radio::groupBy('station_id');


		// ->orderBy($column, $order);

		if (request('search')) {
			if (request('category') == 'all') {
				$radio
					->where('time', 'like', '%' . request('search') . '%')
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



		// CallLogModel::selectRaw('count(*) AS cnt, caller')->groupBy('caller')->orderBy('cnt', 'DESC')->limit(5)->get();

	}

	public function new()
	{
		$select = ['sn', 'ber', 'time', 'state', 'status', 'frequency'];

		$stationsIdObj = Radio::select('station_id')
			->whereRaw('LENGTH(station_id) > 4')
			->groupBy('station_id')
			->get();

		$stationsId = ['YD0OXH', 'YD0OXH1', 'YD0OXH1A', 'YD0OXH3', 'YD0OXH5', 'YD0OXH7', 'YD0OXH8', 'YD0OXH9', 'YD0OXH9A'];
		$location = [];
		foreach ($stationsId as $id) {
			$locations = Station::select('location', 'station_id')
				->where('station_id', $id)
				->first();
			array_push($location, $locations);
		}
		// return $location;

		foreach ($stationsId as $id) {
			$radio[$id] = Radio::select($select)
				->where('station_id', $id)
				->limit(10)
				->get();
		}

		// return $radio;

		return view('newhome', [
			'radios' => $radio,
			'locations' => $location,
		]);

		$page = request()->get('item') ?? 25;
		$order = request()->get('order') ? 'asc' : 'desc';
		$column = request()->get('column') ? request()->get('column') : 'time';
		$radio = Radio::groupBy('station_id');

		if (request('search')) {
			if (request('category') == 'all') {
				$radio
					->where('time', 'like', '%' . request('search') . '%')
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
	}

	public function table()
	{
		$page = request()->get('item') ?? 25;

		$order = request()->get('order') ? 'asc' : 'desc';

		$column = request()->get('column') ? request()->get('column') : 'time';

		$radio = Radio::orderBy($column, $order);

		if (request('search')) {
			if (request('category') == 'all') {
				$radio
					->where('time', 'like', '%' . request('search') . '%')
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

		return view('table', [
			'radios' => $radio->paginate($page),
			'columns' => $thead,
		]);
	}

	public function radio()
	{
		dd(request()->all());
	}
}
