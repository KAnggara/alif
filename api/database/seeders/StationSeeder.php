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
    Station::truncate();

    $csvFile = fopen(base_path("database/data/station.csv"), "r");

    $firstline = true;
    while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
      if (!$firstline) {
        Station::create([
          'station_id' => $data['0'],
          'location' => $data['1'],
          'country' => $data['2'],
          'initial' => $data['3'],
        ]);
      }
      $firstline = false;
    }

    fclose($csvFile);
  }
}
