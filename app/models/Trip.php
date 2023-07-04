<?php

namespace App\Entities;

use App\core\App;

class Trip
{
    public static function selectAll()
    {
        return App::get('database')->selectAll('trips');
    }
}
