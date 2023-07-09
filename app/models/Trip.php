<?php

namespace App\Entities;

use App\core\App;

class Trip
{
    public static function selectAll()
    {
        return App::get('database')->selectAll('trips');
    }

    public static function create($tripCountryId, $tripSeats)
    {
        return App::get('database')->create('trips', ['country_id' => $tripCountryId, 'available_seats' => $tripSeats]);
    }

    public static function update($tripCountryId, $tripSeats, $tripId)
    {
        return App::get('database')->update('trips', ['country_id' => $tripCountryId, 'available_seats' => $tripSeats, 'id' => $tripId]);
    }

    public static function delete($tripId)
    {
        return App::get('database')->delete('trips', ['id' => $tripId]);
    }

    public static function filter($countryName, $availableSeats)
    {
        return App::get('database')->filter($countryName, $availableSeats);
    }

    public static function exists($id)
    {
        $trips = self::selectAll();

        foreach ($trips as $trip) {
            if ($trip->id == $id) {
                return true;
            }
        }
        return false;
    }

    public static function selectById($id)
    {
        $trip = App::get('database')->selectById('trips', $id);
        return $trip;
    }
}
