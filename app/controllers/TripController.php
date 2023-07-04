<?php

namespace App\Controllers;

use App\Entities\Trip;

class TripController
{
  public function homepage()
  {
    $countryName = $_GET['countryName'] ?? '';
    $availableSeats = $_GET['availableSeats'] ?? '';

    if (!empty($countryName) || !empty($availableSeats)) {
        $trips = Trip::filter($countryName, $availableSeats);
    } else {
        $trips = Trip::selectAll();
    }

    return view('trip/index', ['trips'=>$trips, 'selectedCountryName' => $countryName, 'selectedAvailableSeats' => $availableSeats]);
  }

  public function handleRequest()
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

