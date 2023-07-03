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

  public function create()
  {
    $action = $_POST['action'] ?? '';

    switch ($action){
      case 'edit':
        Country::update();
        break;
      case 'delete':
        Country::delete();
      default:
        Country::create();
    }

    return redirect('country');
  }
}

