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

    switch ($action){
      case 'edit':
        Country::update($_POST['countryName'], $_POST['countryId']);
        break;
      case 'delete':
        Country::delete($_POST['countryId']);
      default:
        Country::create($_POST['countryName']);
    }

    return redirect('country');
  }
}

