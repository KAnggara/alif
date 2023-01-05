<?php

namespace Database\Seeders;

use App\Models\Station;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StationSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Station::create([
      "station_id" => "204",
      "location" => "Unknown",
      "inisial" => "UKN",
    ]);
    Station::create([
      "station_id" => "921",
      "location" => "Unknown",
      "inisial" => "UKN1",
    ]);
    Station::create([
      "station_id" => "YD0",
      "location" => "Unknown",
      "inisial" => "UKN2",
    ]);
    Station::create([
      "station_id" => "YD0OXH",
      "location" => "Bandung",
      "inisial" => "BDG",
    ]);
    Station::create([
      "station_id" => "YD0OXH1",
      "location" => "Tanjung Sari",
      "inisial" => "TJS",
    ]);
    Station::create([
      "station_id" => "YD0OXH1A",
      "location" => "Pamengpeuk",
      "inisial" => "PMK",
    ]);
    Station::create([
      "station_id" => "YD0OXH3",
      "location" => "Watusosek",
      "inisial" => "WTK",
    ]);
    Station::create([
      "station_id" => "YD0OXH5",
      "location" => "Kototabang",
      "inisial" => "KTB",
    ]);
    Station::create([
      "station_id" => "YD0OXH5A",
      "location" => "Pekanbaru",
      "inisial" => "PKU",
    ]);
    Station::create([
      "station_id" => "YD0OXH7",
      "location" => "Pontianak",
      "inisial" => "PTK",
    ]);
    Station::create([
      "station_id" => "YD0OXH9",
      "location" => "Biak",
      "inisial" => "BIK",
    ]);
    Station::create([
      "station_id" => "YD0OXH9A",
      "location" => "Kupang",
      "inisial" => "KOE",
    ]);
    Station::create([
      "station_id" => "IW3IPM",
      "location" => "Italy",
      "inisial" => "ITA",
    ]);
  }
}
