<?php

namespace App\Entities;

use App\Core\App;

class Country
{
    private $id;
    private $name;

    public function getId()
    {
        return $this->id;
    }

    public static function getName($id)
    {
        return App::get('database')->getCountryNameFromId($id);
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public static function selectAll()
    {
        return App::get('database')->selectAll('countries');
    }

    public static function create()
    {
        return App::get('database')->create('countries', ['name' => $_POST['countryName']]);
    }

    public static function update()
    {
        return App::get('database')->update('countries', ['name' => $_POST['countryName'], 'id' => $_POST['countryId']]);
    }

    public static function delete()
    {
        return App::get('database')->delete('countries', ['id' => $_POST['countryId']]);
    }
}
