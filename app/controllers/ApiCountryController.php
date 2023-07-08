<?php

namespace App\Controllers;

use App\Entities\Country;
use App\core\Response;

class ApiCountryController
{
  public function getAllCountries()
  {
    $countries = Country::selectAll();
    Response::json($countries, 200);
  }

  public function addNewCountry()
  {
    $name = $_REQUEST['name'];

    if(!empty($name)){
      Country::create($name);
      Response::json("Country {$name} successfully created", 201);
    } else{
      Response::json("Insert a valid name", 400);
    }
  }

  public function updateCountry()
  {
    $id = $_REQUEST['id'];
    $countryName = $_REQUEST['name'];

    if(Country::exists($id) && !empty($countryName)){
      Country::update($countryName, $id);
      Response::json("Country with id: {$id} successfully changed name to {$countryName}", 200);
    } else{
      Response::json("Enter a valid name and id", 404);
    }
  }

  public function deleteCountry()
  {
    $id = $_REQUEST['id'];

    if(Country::exists($id)){
      Country::delete($id);
      Response::json("Country with ID: {$id} successfully deleted", 200);
    } else{
      Response::json("Enter a valid ID to delete a country", 404);
    }
  }
}

