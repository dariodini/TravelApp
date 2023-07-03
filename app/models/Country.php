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

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public static function selectAll()
    {
        return App::get('database')->selectAll('countries');
    }

}
