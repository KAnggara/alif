<?php

namespace Database\Seeders;

use App\Models\Radio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RadioSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Radio::create([
			'time' => 1596214399,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596210859,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596209545,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596208218,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596206895,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596206143,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1596204103,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596203089,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596258163,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596286480,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596284782,
			'frequency' => 7102000,
			'state' => 'TO',
			'destination' => '311',
			'status' => 'TIS',
			'station_id' => '204',
			'ber' => 25,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596284505,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596284442,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 16,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596283067,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596283037,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596282973,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596281215,
			'frequency' => 7102000,
			'state' => 'TO',
			'destination' => '214',
			'status' => 'TIS',
			'station_id' => '204',
			'ber' => 24,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596280906,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596280643,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596279409,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1596279373,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596279319,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596279201,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596275863,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1596274165,
			'frequency' => 7102000,
			'state' => 'TO',
			'destination' => '311',
			'status' => 'TIS',
			'station_id' => '204',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596273702,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1596272322,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596271995,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596270161,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596269627,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 17,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596268782,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596268273,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596266628,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596265248,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1596261703,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 22,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596257357,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596256123,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596254928,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 16,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596254622,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596250153,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596248263,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596245566,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596242831,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596241541,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596240640,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 26,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596238481,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596238365,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596227740,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1596217934,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596217183,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596217128,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596216770,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 25,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596355609,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596354983,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596351441,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 18,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596351136,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596344861,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1596344740,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 19,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596330703,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1596327163,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 16
		]);
		Radio::create([
			'time' => 1596327099,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596318342,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596312945,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596311267,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596309406,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596309349,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596307698,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596305741,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596305384,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596304819,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 19,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1596304161,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596302265,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 18,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596301847,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596298720,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596298307,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596298303,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596298255,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596298240,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596298240,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596297498,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596294743,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596293959,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596293773,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596293625,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596291642,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596290422,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596290238,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596290021,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1596289753,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596288050,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596443080,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596442280,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596441086,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596438743,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596436006,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596435144,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596433901,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596431926,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596430403,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596425385,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596424283,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596421845,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596421787,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596421163,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596416215,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 19,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596415938,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596413362,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596407506,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596393218,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 18,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596389688,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 17,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596387166,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 15,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596385884,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596380541,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596377803,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 25,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596376816,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596376700,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596376481,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1596373521,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596373284,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596373099,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596373005,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596371227,
			'frequency' => 7102000,
			'state' => 'TO',
			'destination' => '215',
			'status' => 'TIS',
			'station_id' => '204',
			'ber' => 25,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596369977,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1596369833,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596369579,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596369459,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596367564,
			'frequency' => 7102000,
			'state' => 'TO',
			'destination' => '311',
			'status' => 'TIS',
			'station_id' => '204',
			'ber' => 23,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596367062,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596366160,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 14
		]);
		Radio::create([
			'time' => 1596365896,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596362626,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1596361734,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0',
			'ber' => 22,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596361734,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 25,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596361239,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596359147,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596358216,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596540126,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 16,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596539678,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596538842,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596538723,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596535297,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596529320,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596527301,
			'frequency' => 18106000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596525081,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596521421,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596517763,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596506979,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 18,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596506906,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 17,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596503506,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596499899,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596485498,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596484282,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596482801,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596470365,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596469945,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596468643,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596467922,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596466702,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596463339,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596462441,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 20,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596460781,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596458086,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596457302,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596457180,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 14,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596457165,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 14,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1596456624,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 14,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596454071,
			'frequency' => 7102000,
			'state' => 'TO',
			'destination' => '311',
			'status' => 'TWS',
			'station_id' => '204',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596453766,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596453109,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596450353,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596450162,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596449543,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 19,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596448613,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 17,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596446681,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596628799,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596627008,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH9',
			'ber' => 26,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596626713,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596626678,
			'frequency' => 7102000,
			'state' => 'TO',
			'destination' => '311',
			'status' => 'TIS',
			'station_id' => '204',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596626598,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596623238,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596616093,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596711798,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596703243,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 17,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596701593,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596698275,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596698055,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 19,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596694451,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596690435,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596679814,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596676274,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596676217,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 13,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596669013,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596665502,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596655901,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596644586,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 16,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596643626,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 23,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596640697,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596637338,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1596637158,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 17,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596635990,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596634604,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 20,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596630259,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1596764517,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596761412,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596757812,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596757750,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596743800,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596736571,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596736276,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 15,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596725958,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596722441,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 16,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596718872,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 19,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596716766,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 18,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596715977,
			'frequency' => 7102000,
			'state' => 'TO',
			'destination' => '208',
			'status' => 'TIS',
			'station_id' => '204',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596713133,
			'frequency' => 7102000,
			'state' => 'TO',
			'destination' => '215',
			'status' => 'TWS',
			'station_id' => '204',
			'ber' => 25,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596713128,
			'frequency' => 7102000,
			'state' => 'TO',
			'destination' => '215',
			'status' => 'TIS',
			'station_id' => '204',
			'ber' => 21,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596950048,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596935835,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1596935652,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 16,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596932112,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596931779,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596930427,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 30,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596930297,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596928691,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596924675,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596917740,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596910688,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 19,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596910454,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 17,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596906969,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596906915,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 25,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596905522,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 25,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596905157,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 25,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596901975,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 25,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596900248,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596896113,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596889539,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596888235,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596885796,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 19,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596884861,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 18,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596882834,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596881954,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596879013,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 25,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596877260,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596876491,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596875441,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 29,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596868330,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596864550,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596861008,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596853630,
			'frequency' => 18106000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596850636,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596850574,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 22,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596849281,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596847035,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596846941,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596836109,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596832661,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 17,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1596832511,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596828975,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596828914,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596828730,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 15,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596821653,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 18,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596811212,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596811096,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596808863,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596807677,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596806622,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 25,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596806402,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596806402,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596804501,
			'frequency' => 7102000,
			'state' => 'TO',
			'destination' => '216',
			'status' => 'TIS',
			'station_id' => '204',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596801938,
			'frequency' => 7102000,
			'state' => 'TO',
			'destination' => '210',
			'status' => 'TWS',
			'station_id' => '204',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596801933,
			'frequency' => 7102000,
			'state' => 'TO',
			'destination' => '210',
			'status' => 'TIS',
			'station_id' => '204',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596801240,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 19,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596793692,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596789975,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596782892,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596781861,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 29,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596779537,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596779293,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596775993,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596775810,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597056546,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597049530,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597047866,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597041569,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 25,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597039214,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597037066,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 18,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597035666,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 19,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597035314,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 18,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597034255,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 23,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597033535,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597033534,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 29,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597025542,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 22,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597022013,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 17,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597018118,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 23,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597015168,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 16,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1597006994,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 22,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597000596,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596996433,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596996312,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596988899,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596982292,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596982291,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596978867,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 26,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596978554,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1596975015,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1596973119,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 20,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596971549,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 30,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1596971292,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1596971055,
			'frequency' => 18106000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1596967990,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1596953649,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597208116,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597208093,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597204000,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 18,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597201016,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 15
		]);
		Radio::create([
			'time' => 1597314356,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597314193,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597313704,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597313636,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597313396,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597312615,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597312496,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597311001,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597310757,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597310413,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597309616,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597309083,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597307463,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597307160,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597306616,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597306440,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597305363,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597305121,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597303616,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597303082,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597302901,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597302481,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597301757,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597301581,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 25,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597301519,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597300083,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 16,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597299796,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597299538,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597299361,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597298995,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597298944,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597298158,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597296478,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597296415,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597296192,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597295999,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597294563,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597294142,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597291800,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597291017,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597289657,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597289410,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597289275,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597288924,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597286461,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597285615,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597285138,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597284658,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597282034,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 22,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597282017,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597281603,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597281537,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597281115,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1597281001,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597280155,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597276612,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597275747,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597275252,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597275078,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 14,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597267016,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597261091,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 25,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597258975,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597257061,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597256522,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597256217,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597255143,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597254296,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597252919,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 16,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597252676,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597252550,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597251121,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597250211,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597249979,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597249140,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597248061,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597247462,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597246992,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597246934,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597246818,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597245597,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597245471,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597244875,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597244337,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597243982,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597243555,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597243457,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597241756,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597240382,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597239899,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597238331,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597237794,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597237740,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597237315,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597237140,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597236378,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597235930,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597235617,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597235558,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 18,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597234021,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597233777,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597232773,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 17,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597230058,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597229218,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 14,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597228912,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 22,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597226280,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597225757,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597224279,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 20,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597222218,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 18,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597221753,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 21,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1597219020,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597218735,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597218694,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597218676,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597218121,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597218021,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH9',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597374546,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597373877,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597372020,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597371245,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597371117,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597370942,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597370164,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597368364,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597368245,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597367880,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597367521,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597367044,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597366989,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597366624,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597364817,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597364698,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597363789,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597358928,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597356493,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597356240,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597353253,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597352880,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 16,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1597351910,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 23,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597349355,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 15,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597342427,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597340940,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'IW3IPM',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597340090,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597338970,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597338731,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 17,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597337749,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597335434,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 18,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597333753,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 18,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597328290,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597326716,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597325159,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597324564,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597324510,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597324077,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597323421,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597323004,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597321439,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597320720,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597320661,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597320476,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597320363,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597320362,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597320297,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597319764,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597317900,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597317841,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597317730,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597317237,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597317184,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597316936,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597316833,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH7',
			'ber' => 26,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597315969,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 28,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597471200,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597470964,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597470840,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597470605,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597469887,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597468260,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597467661,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597467424,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597466289,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597464849,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597464484,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597463763,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597463285,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597462745,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 19,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597462209,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597462081,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597461307,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597460168,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597459871,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597458544,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597458361,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597457762,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597445834,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597442294,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597438754,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597435215,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597431674,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 6,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597431670,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0',
			'ber' => 17,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597428133,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0',
			'ber' => 20,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597424587,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597410434,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0',
			'ber' => 16,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597410430,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 17,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597406895,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597626249,
			'frequency' => 21096000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 14,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1597626245,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 22,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597555813,
			'frequency' => 21096000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597555809,
			'frequency' => 18106000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597746722,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597745712,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597745592,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597745473,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597745053,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597744934,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 19,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597743843,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597742170,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597741994,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597741870,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597741808,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597741575,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597741393,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597739648,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 14,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597733707,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597729030,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597727107,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 19,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597726931,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597726150,
			'frequency' => 18106000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597726084,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597725189,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597723576,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597723390,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597723157,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597722547,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597721887,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597721653,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597720872,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597720152,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597828391,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597828276,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597828206,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597825086,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597824677,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597824660,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597824611,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597822389,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597822094,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 16
		]);
		Radio::create([
			'time' => 1597821917,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597821849,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597821124,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597821073,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597819932,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597818492,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597817472,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597816449,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597816388,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597814957,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 17,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597814774,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597814760,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597814711,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597814042,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597813995,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 17,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597813876,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597812857,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597811717,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597811223,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597811109,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597810505,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597810457,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597809376,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597809317,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597808954,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597808169,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597806967,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597806914,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597806675,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597805773,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597805714,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597804508,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597804330,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597803841,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597803136,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597803011,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597802171,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597801875,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597800788,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597800611,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597800304,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597799887,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 18,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597799476,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597777993,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597777928,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597776970,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597775464,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597774695,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597774333,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597774215,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597773911,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597771274,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597769655,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'IW3IPM',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597768623,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597768565,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597768263,
			'frequency' => 7102000,
			'state' => 'TO',
			'destination' => '486',
			'status' => 'TIS',
			'station_id' => '921',
			'ber' => 20,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597766775,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597766356,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597764074,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597756333,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597756207,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597753213,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597752967,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597752671,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597752608,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597752247,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597749671,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597749429,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597898476,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597897573,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597897280,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597897219,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597896854,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597895591,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597894279,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597893917,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597893492,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597893436,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597893074,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597892162,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597891399,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597889531,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597887791,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597887439,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597887200,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 15
		]);
		Radio::create([
			'time' => 1597886178,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 19,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1597886053,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597884251,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597883895,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597883773,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597881368,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597878900,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597872458,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 25,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597861202,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 13,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597857005,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597849988,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 16,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597849507,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597845497,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 14
		]);
		Radio::create([
			'time' => 1597845015,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597843759,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597843574,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597842915,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597842847,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597842366,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597841831,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597840274,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597840094,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597839978,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597839842,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597839670,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597838821,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597838115,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597836248,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597836002,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597835946,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 17,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597835591,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597835284,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 25,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597834514,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597834152,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597833015,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1597832469,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597832118,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597831936,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597831747,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 25,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597830612,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597829797,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 13,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597829113,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598002713,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 17,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598002402,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 15,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598002118,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598002104,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598000120,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597999821,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597999464,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 19,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597998920,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597998801,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597998381,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597995436,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597995134,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597994782,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597994716,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597994360,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597991898,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597991719,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597991542,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597990698,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597989019,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597988780,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597988718,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597987996,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597985536,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597985478,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597985234,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597984516,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597981830,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597981654,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597981277,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 18,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597980080,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597978411,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597978281,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597977440,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597976894,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597974875,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 19,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597974856,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597974501,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597973954,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597973893,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1597972993,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597971193,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597970834,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 14
		]);
		Radio::create([
			'time' => 1597970233,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597970116,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597969820,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 17,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597969453,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597967297,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597948693,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597948581,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1597948154,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597947857,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597945818,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597945692,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597945032,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597944315,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597942221,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597942156,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597941498,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597934721,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597934598,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597934475,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597934232,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1597934113,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597930874,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597930457,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597930334,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597930216,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597926918,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597926794,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597926621,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597926497,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1597926379,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597926134,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597923379,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597923314,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597923198,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597923077,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 14
		]);
		Radio::create([
			'time' => 1597922953,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597922835,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597922595,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597919594,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597919181,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1597919114,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 18,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597917219,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597916060,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597915520,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597915458,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1597915396,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597912516,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597911913,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597911795,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1597911734,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597910856,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597908675,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597908378,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597908315,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597906953,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 17,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1597903898,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597903832,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1597902016,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1597901118,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597901054,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597900931,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1597900391,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1597900233,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 19,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1598089699,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598087736,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598087720,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598087419,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598087242,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598087065,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598086818,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598086162,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598084122,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1598083642,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598083520,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598083399,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598083222,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598080097,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598079978,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598079858,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598079618,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598079079,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598076498,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598076085,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598075960,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1598075479,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598073202,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598072717,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598072425,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 17,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598072245,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598072177,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598070635,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598070091,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1598069605,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598069297,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598068878,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598068702,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598068399,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598065697,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598065581,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598065342,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598065102,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598064864,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598064800,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598062283,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598061802,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598061437,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598061203,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598058742,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598058623,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1598057841,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598057541,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598158531,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 16,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1598157083,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598155644,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598155593,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 19,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598155278,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598155051,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598153486,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598153178,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598151622,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598151442,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598149098,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598148924,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598148080,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598146763,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598145379,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 16
		]);
		Radio::create([
			'time' => 1598144421,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598144302,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598144062,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598141782,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598139685,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598138725,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598138600,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598138304,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598137279,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598134705,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598133741,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598133558,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598133377,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598130077,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598129957,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598129838,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598127745,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598127562,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598127378,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598126426,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598109685,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598108959,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 14,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598105965,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598105659,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598105420,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598102186,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598102059,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598101584,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598101278,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598100618,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598098577,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598098524,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598098476,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598098403,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598098353,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598098226,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598098102,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598097443,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598094984,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598094933,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598094559,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598093902,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598093242,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598092416,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 26,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598091381,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598091201,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598090960,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598090840,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1598090598,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598090358,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598252251,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598251534,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 18,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598251343,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598250870,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598250448,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598248290,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598247809,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598247804,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598247687,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598247633,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598247507,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598247215,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598246790,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598246424,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598244986,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 14
		]);
		Radio::create([
			'time' => 1598244688,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598244395,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598244269,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598244266,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598243727,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598243491,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598243244,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598241328,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598240128,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598239946,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598239708,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598239347,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598237247,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598237183,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598236587,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598236402,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598235803,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598230892,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598229813,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598229745,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598229450,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598228901,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598226987,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598226088,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598225902,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598225789,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598225190,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598208385,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598207968,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1598199213,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 20,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598198006,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598194532,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598190803,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598190146,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598189247,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598187087,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598186906,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1598186423,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598186363,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598186184,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598185582,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598183001,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598182644,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598182285,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598182162,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598181925,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598179518,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1598179039,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598178927,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598178743,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598178385,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1598175865,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598175503,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598175334,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598174786,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598173588,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598173294,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 16,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598173049,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598172204,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598171958,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598171605,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598171484,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598169874,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 15,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1598169749,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598169689,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 25,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598169273,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598168602,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598168487,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598168363,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598167943,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598167818,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598166274,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 15,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598166149,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598164822,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598163923,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598326291,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598325145,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 15,
			'sn' => 3
		]);
		Radio::create([
			'time' => 1598324909,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598324008,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598323708,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598323470,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598322743,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598322452,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598322267,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598321365,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598320464,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598320164,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598319924,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598319803,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598319210,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598318964,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598318911,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598318788,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598318729,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598316864,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598316563,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598316383,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598315664,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598315364,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598312667,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598312549,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598291967,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598288305,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598284289,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598281950,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598277329,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598277023,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598276842,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598276662,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598275648,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598275231,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598273729,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598273491,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598273306,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598272704,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598272654,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598271930,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598271683,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598270062,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598269414,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598269353,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598269170,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598269167,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598269110,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598268927,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598268567,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598268265,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598268026,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598267962,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598266526,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598266404,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598266222,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598265753,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598265029,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598264728,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598262984,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598262807,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598262682,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598262024,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598261490,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598261183,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598422589,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598421992,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598421926,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598421752,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598420007,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598419049,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1598418448,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598418210,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598417907,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598416953,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598416294,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598415506,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598414255,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598414187,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598414134,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598414014,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598412932,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598410833,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598410715,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598410466,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598410346,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598410295,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598409631,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598406872,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598406806,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598406572,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598406506,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598406088,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598403515,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598403146,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598403029,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598402911,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 19,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598402673,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598402246,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598402010,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 20,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598401291,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598400028,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598399489,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598399372,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598383110,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598377827,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598377346,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598377233,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598376931,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598376021,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'IW3IPM',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598373752,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598604454,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598604028,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598603859,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598602235,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1598601992,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598601820,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598601634,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598601511,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598601391,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598600738,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598600549,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 25,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598600490,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598600257,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598597916,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598597678,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598597076,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598597010,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 25,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598596889,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 25,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598596717,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598594313,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598593899,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598593353,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598593173,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598591436,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598589932,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598589877,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598589812,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598589517,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598587773,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598586697,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598586212,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598584111,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598582978,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598582853,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 14
		]);
		Radio::create([
			'time' => 1598582616,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598582379,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598580579,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598579737,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598579615,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598579251,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598577036,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598576193,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598576073,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598575836,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598575660,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598575535,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598575239,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598572118,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598571696,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598568099,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598567913,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 23,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598565211,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598564974,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598550936,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598550813,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598550807,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598550454,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598550036,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598546198,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598546073,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598543550,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598543430,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598543258,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598543190,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598542769,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598707239,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1598706458,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598706036,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598705801,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598705020,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598704956,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598703702,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598702923,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598702854,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598702263,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598702013,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598701182,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598699381,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598698883,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598696803,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598696068,
			'frequency' => 7102000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598695961,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598695180,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598695059,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598694278,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598694041,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598692897,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 19,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598692832,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598692118,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598691521,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598691457,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598689360,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 14
		]);
		Radio::create([
			'time' => 1598689287,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598687855,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598685748,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 17,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598685035,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598684977,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598684141,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598683542,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598683419,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598682282,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598682209,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 25,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598681317,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598680414,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598679822,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598678666,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598678616,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598678020,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598677596,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598676936,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598676335,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598676281,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598674660,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 17,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598674414,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598674234,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598673629,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598673401,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 21,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598673336,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598671353,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598670818,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598670455,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598669738,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598668777,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598667517,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598667280,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598666201,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598665358,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598665239,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598663249,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 25,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598662660,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598661819,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598660440,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598630725,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 19,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598627433,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598627319,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598626837,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598625820,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598625273,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 18,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598624312,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598623836,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598623055,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598622937,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598621306,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598620296,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598618616,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598618132,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598616813,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598616517,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598615672,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598615619,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598615073,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598614465,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598613157,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598612973,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598612434,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 16,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598612013,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598611531,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598610991,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 18,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598609554,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598609079,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598608478,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598608000,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598607512,
			'frequency' => 18106000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598605418,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598605177,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598604987,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598604939,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598790577,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598790217,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598788122,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598787282,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598784577,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598783196,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598783081,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598782903,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598777257,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598776659,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598776401,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 21,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598776225,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TWS',
			'station_id' => 'YD0OXH9',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598775405,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598775386,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598773422,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598772282,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598772217,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598772164,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598771798,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598769338,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598769216,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 16,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598768678,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598768320,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598767046,
			'frequency' => 18106000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598765981,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598765616,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598765562,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598765256,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598764724,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598762437,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598761898,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598761364,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598760940,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598758476,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598758109,
			'frequency' => 14109000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598757883,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598757865,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598757700,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598757403,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598757162,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598755124,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598754939,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598754400,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598753921,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598753623,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598750796,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 15,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598750544,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598750321,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598750198,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598750138,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598750021,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598746476,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598746405,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598746244,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598746058,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598744375,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598744264,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598743527,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 20,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598741063,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 26,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598739626,
			'frequency' => 3596000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598734822,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598731362,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598724684,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 28,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598724579,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598724337,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598723976,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598722170,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598721878,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598720003,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598717729,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598715883,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598878126,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598877940,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598877819,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598877699,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598877464,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1598876142,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598876087,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 20,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598874579,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598874039,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598873801,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598873564,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1598872604,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 13
		]);
		Radio::create([
			'time' => 1598870684,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598870444,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598870259,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598870019,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 16,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598869968,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598868943,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598868689,
			'frequency' => 18106000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 28,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598866244,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598863366,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 10
		]);
		Radio::create([
			'time' => 1598862760,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598862704,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598861928,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598859699,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598859582,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598856343,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598856223,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598856043,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 15
		]);
		Radio::create([
			'time' => 1598855919,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598855506,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 12
		]);
		Radio::create([
			'time' => 1598854784,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 17
		]);
		Radio::create([
			'time' => 1598852807,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 28,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598852620,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598852499,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598851542,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598851181,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598847641,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598847465,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 23,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598845239,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 29,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598843908,
			'frequency' => 18106000,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 27,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598842127,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598841639,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598841107,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598840566,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598840379,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 22,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598834083,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598833843,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 11
		]);
		Radio::create([
			'time' => 1598833421,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598833179,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598831206,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598830427,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 7
		]);
		Radio::create([
			'time' => 1598829646,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 30,
			'sn' => 8
		]);
		Radio::create([
			'time' => 1598829444,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 30,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598824239,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 26,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598810241,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 23,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598805040,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 27,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598804325,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 19,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598803100,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 29,
			'sn' => 6
		]);
		Radio::create([
			'time' => 1598800702,
			'frequency' => 7049500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH3',
			'ber' => 30,
			'sn' => 9
		]);
		Radio::create([
			'time' => 1598797417,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 25,
			'sn' => 5
		]);
		Radio::create([
			'time' => 1598797361,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598795196,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH',
			'ber' => 24,
			'sn' => 4
		]);
		Radio::create([
			'time' => 1598793447,
			'frequency' => 10145500,
			'state' => 'SND',
			'status' => 'TIS',
			'station_id' => 'YD0OXH1A',
			'ber' => 21,
			'sn' => 5
		]);
	}
}
