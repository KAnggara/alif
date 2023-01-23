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
    Radio::truncate();

    $csvFile = fopen(base_path("database/data/radio.csv"), "r");

    $firstline = true;
    while (($data = fgetcsv($csvFile, 2000, ";")) !== FALSE) {
      if (!$firstline) {
        Radio::create([
          'time' => $data['0'],
          'frequency' => $data['1'],
          'state' => $data['2'],
          'destination' => $data['3'] == 'null' ? null : $data['3'],
          'status' => $data['4'],
          'station_id' => $data['5'],
          'ber' => $data['6'],
          'sn' => $data['7'],
        ]);
      }
      $firstline = false;
    }

    fclose($csvFile);
  }
}
