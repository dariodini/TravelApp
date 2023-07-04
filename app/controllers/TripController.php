<?php

namespace App\Controllers;

use App\Entities\Trip;

class TripController
{
  public function homepage()
  {
    $trips = Trip::selectAll();
    return view('trip/index', ['trips'=>$trips]);
  }
}

