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

  public function create()
  {
    $action = $_POST['action'] ?? '';

    switch ($action){
      case 'edit':
        Trip::update();
        break;
      case 'delete':
        Trip::delete();
        break;
      default:
        Trip::create();
    }

    return redirect('trip');
  }
}

