<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
  use HasFactory;

  public function radio()
  {
    return $this->belongsTo(Station::class, 'station_id', 'station_id');
  }
}
