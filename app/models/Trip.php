<?php

namespace App\Entities;

use App\core\App;

class Trip
{
    public static function selectAll()
    {
        return App::get('database')->selectAll('trips');
    }

    public static function create()
    {
        return App::get('database')->create('trips', ['country_id' => $_POST['tripCountry'], 'available_seats' => $_POST['tripSeats']]);
    }

    public static function update()
    {
        return App::get('database')->update('trips', ['country_id' => $_POST['tripCountry'], 'available_seats' => $_POST['tripSeats'], 'id' => $_POST['tripId']]);
    }

    public static function delete()
    {
        return App::get('database')->delete('trips', ['id' => $_POST['tripId']]);
    }
}
