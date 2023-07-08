<?php

namespace App\Entities;

use App\Core\App;

class Country
{
    public static function getName($id)
    {
        return App::get('database')->getCountryNameFromId($id);
    }

    public static function selectAll()
    {
        return App::get('database')->selectAll('countries');
    }

    public static function create($name)
    {
        return App::get('database')->create('countries', ['name' => $name]);
    }

    public static function update($name, $id)
    {
        return App::get('database')->update('countries', ['name' => $name, 'id' => $id]);
    }

    public static function delete($id)
    {
        return App::get('database')->delete('countries', ['id' => $id]);
    }
}
