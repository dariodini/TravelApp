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
        $trips = Trip::filter($_GET['countryName'], $_GET['availableSeats']);
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
        Trip::update($_POST['tripCountry'], $_POST['tripSeats'], $_POST['tripId']);
        break;
      case 'delete':
        Trip::delete($_POST['tripId']);
        break;
      default:
        Trip::create($_POST['tripCountry'], $_POST['tripSeats']);
    }

    return redirect('trip');
  }
}

