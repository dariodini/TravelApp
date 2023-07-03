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

}
