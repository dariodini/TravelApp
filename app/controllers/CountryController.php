<?php

namespace App\Controllers;

use App\Entities\Country;

class CountryController
{
  public function homepage()
  {
    $countries = Country::selectAll();
    return view('country/index', ['countries'=>$countries]);
  }

  public function handleRequest()
  {
    $action = $_POST['action'] ?? '';
    $countryName = $_POST['countryName'];
    $countryId = $_POST['countryId'];

    switch ($action){
      case 'edit':
        Country::update($countryName, $countryId);
        break;
      case 'delete':
        Country::delete($countryId);
      default:
        Country::create($countryName);
    }

    return redirect('country');
  }
}

