<?php

namespace App\Http\Controllers;

use App\Models\Radio;
use App\Models\Station;
use App\Traits\PaginationTraits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class HomeController extends Controller
{
	use PaginationTraits;
	public function index(Request $request)
	{
		$location = [];
		$listLocation = [];
		$select = ['sn', 'ber', 'time', 'state', 'status', 'frequency'];
		// add location based on sttation id
		$listStationsId = ['YD0OXH', 'YD0OXH9', 'YD0OXH9A', 'YD0OXH5', 'YD0OXH8', 'YD0OXH1', 'YD0OXH7', 'YD0OXH1A', 'YD0OXH3'];

		// Set all station to false
		Station::where('state', true)->update(['state' => false]);
		$max = Radio::max('time');

		// show station for content
		$stationsId = $request->stationsId;
		isset($stationsId) ? $stationsId : $stationsId = $listStationsId;

		// Set selected station to true
		foreach ($stationsId as $id) {
			Station::where('station_id', $id)->update(['state' => true]);
		}

		foreach ($stationsId as $id) {
			$locations = Station::select('location', 'station_id')
				->where('station_id', $id)
				->where('state', true)
				->first();
			array_push($location, $locations);
		}

		// Show all station for Sidebar
		foreach ($listStationsId as $id) {
			$locations = Station::select('location', 'station_id', 'state')
				->where('station_id', $id)
				->first();
			array_push($listLocation, $locations,);
		}

		// check start
		$start = isset($request->start) ? strtotime($request->start) : 1577861669;


		// check end
		$end = isset($request->end) ? strtotime($request->end) : $max;

		$limit = isset($request->limit) ? $request->limit : 100;

		// return $request->all();

		$colorsList = array("from-red-200 to-red-50 ", "from-green-200 to-green-50", "from-blue-200 to-blue-50", "from-yellow-200 to-yellow-50", "from-indigo-200 to-indigo-50", "from-pink-200 to-pink-50", "from-purple-200 to-purple-50", "from-gray-200 to-gray-50", "from-orange-200 to-orange-50");

		foreach ($stationsId as $id) {
			$radio[$id] = Radio::select($select)
				->where('station_id', $id)
				->where('time', '>', $start)
				->where('time', '<', $end)
				->limit($limit)
				->orderBy('time', 'desc')
				->get();
		}

		return view('newhome', [
			'nav' => 'home',
			'limit' => $limit,
			'radios' => $radio,
			'locations' => $location,
			'colorsList' => $colorsList,
			'listlocations' => $listLocation,
			'end' =>  date("d/m/Y", substr($end, 0, 10)),
			'start' => date("d/m/Y", substr($start, 0, 10)),
		]);
	}

	public function data()
	{
		// GET List of date
		$bestFrq = $radioDates = DB::table('radios')
			->select(DB::raw('frequency'))
			->get();
		$frqArr = [];
		for ($i = 0; $i < count($bestFrq); $i++) {
			array_push($frqArr, $bestFrq[$i]->frequency);
		}
		$frqList = array_count_values($frqArr);
		$frqModus = array_search(max($frqList), $frqList);

		$dateList = [];
		$radioData = [];
		$dayEpoch = 86400;
		$radioDates = DB::table('radios')
			->select(DB::raw('count(frequency) as tx_times, FROM_UNIXTIME(time, "%Y-%m-%d") as dateCreate'))
			->limit(100)
			->groupBy('dateCreate')
			->orderBy('dateCreate', 'asc')
			->get();

		for ($i = 0; $i < count($radioDates); $i++) {
			array_push($dateList, $radioDates[$i]->dateCreate);
		}

		foreach ($dateList as $date) {
			$radioDatas = DB::table('radios')
				->select(DB::raw('frequency, station_id, FROM_UNIXTIME(time, "%Y-%m-%d") as dateCreate'))
				->where('time', '>', strtotime($date))
				->where('time', '<', strtotime($date) + $dayEpoch)
				->get();

			$valueArray = [];
			for ($i = 0; $i < count($radioDatas); $i++) {
				array_push($valueArray, $radioDatas[$i]->frequency);
			}
			$values = array_count_values($valueArray);
			$mode = array_search(max($values), $values);
			$output = [
				'frequency' => $mode,
				'total' => count($radioDatas),
				'comunication' => max($values),
				'epoch' => strtotime($date),
				'dateCreate' => $date,
			];
			array_push($radioData,  $output);
		}

		$radioData = $this->paginate($radioData, 10);
		$radioData->withPath('');

		$as = array_keys($frqList);
		sort($as);

		$newFrqList = [];
		foreach ($as as $key) {
			$op = [
				'frequency' => $key,
				'total' => $frqList[$key],
			];
			array_push($newFrqList,  $op);
		}

		return view('modus', [
			'nav' => 'data',
			'frqList' => $newFrqList,
			'radioDatas' => $radioData,
		]);
	}

	public function alls()
	{
		$select = ['sn', 'ber', 'time', 'state', 'status', 'frequency'];
		$stationsId = ['YD0OXH', 'YD0OXH1', 'YD0OXH1A', 'YD0OXH3', 'YD0OXH5', 'YD0OXH7', 'YD0OXH8', 'YD0OXH9', 'YD0OXH9A'];

		foreach ($stationsId as $id) {
			$radio[$id] = Radio::select($select)
				->where('station_id', $id)
				->get();
		}

		$location = [];
		foreach ($stationsId as $id) {
			$locations = Station::select('location', 'station_id')
				->where('station_id', $id)
				->first();
			array_push($location, $locations);
		}

		return view('home', [
			'radios' => $radio,
			'locations' => $location,
		]);
	}

	public function all(int $limit)
	{
		$select = ['sn', 'ber', 'time', 'state', 'status', 'frequency'];
		$stationsId = ['YD0OXH', 'YD0OXH1', 'YD0OXH1A', 'YD0OXH3', 'YD0OXH5', 'YD0OXH7', 'YD0OXH8', 'YD0OXH9', 'YD0OXH9A'];

		foreach ($stationsId as $id) {
			$radio[$id] = Radio::select($select)
				->where('station_id', $id)
				->limit($limit)
				->get();
		}

		$location = [];
		foreach ($stationsId as $id) {
			$locations = Station::select('location', 'station_id')
				->where('station_id', $id)
				->first();
			array_push($location, $locations);
		}

		return view('home', [
			'radios' => $radio,
			'locations' => $location,
		]);
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

	public function about()
	{
		return view('about', []);
	}

	public function date()
	{
		$date = request()->get('date');
		$frq = request()->get('frq');
		$startDate = strtotime($date);
		$endDate = strtotime($date) + 86400;
		$radioSelected = DB::table('radios')
			->where('time', '>', $startDate)
			->where('time', '<', $endDate)
			->get();

		$object = (object) $radioSelected;

		return view('date', [
			'nav' => 'data',
			'frq'	=> $frq,
			'radioSelected' => $object,
		]);
	}
}
