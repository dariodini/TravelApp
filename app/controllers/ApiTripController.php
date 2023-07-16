<?php

namespace App\Controllers;

use App\Entities\{Trip, Country};
use App\core\Response;

class ApiTripController
{
  public function getTrips()
  {
    $countryId = $_GET['countryId'] ?? null;
    $availableSeats = $_GET['availableSeats'] ?? null;
    $countryName = null;

    if ($countryId){
      if(Country::exists($countryId)) {
        $countryName = Country::getName($countryId);
      }else {
        Response::json('Enter a valid Country ID to filter the results', 404);
      }
    }

    if ($countryName || $availableSeats) {
      $trips = Trip::filter($countryName, $availableSeats);
    } else{
      $trips = Trip::selectAll();
    }

    $formattedTrips = array_map(function ($trip) {
      $countryName = Country::getName($trip->country_id);
      $trip->country_id = $countryName;
      return $trip;
    }, $trips);

    Response::json($formattedTrips, 200);
  }

  public function addNewTrip()
  {
    $countryId = $_REQUEST['countryId'];
    $availableSeats = $_REQUEST['availableSeats'];
    $countryName = Country::getName($countryId);

    if(!empty($countryId) && !empty($availableSeats) && Country::exists($countryId)){
      Trip::create($countryId, $availableSeats);
      Response::json("Trip to {$countryName} with {$availableSeats} seats successfully created", 201);
    } else{
      Response::json("Insert a valid countryId and seats", 400);
    }
  }

  public function updateTrip()
  {
    $id = $_REQUEST['id'] ?? null;
    $countryId = $_REQUEST['countryId'] ?? null;
    $availableSeats = $_REQUEST['availableSeats'] ?? null;

    if(Trip::exists($id)) {
      $trip = Trip::selectById($id);

      if($countryId && !Country::exists($countryId)) {
        Response::json('Enter a valid Country ID', 404);
      }

      if ($countryId !== null) {
        $trip->country_id = (int)$countryId;
      }
      if ($availableSeats !== null) {
        $trip->available_seats = $availableSeats;
      }

      Trip::update($trip->country_id, $trip->available_seats, $trip->id);

      Response::json("Trip with ID: {$id} successfully updated", 200);
    } else {
      Response::json("Enter a valid ID to update a Trip", 404);
    }
  }

  public function deleteTrip()
  {
    $id = $_REQUEST['id'];

    if(Trip::exists($id)){
      Trip::delete($id);
      Response::json("Trip with ID: {$id} successfully deleted", 200);
    } else{
      Response::json("Enter a valid ID to delete a Trip", 404);
    }
  }
}

