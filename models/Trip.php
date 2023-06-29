<?php

namespace App\Entities;

class Trip
{
    private $id;
    private $countryId;
    private $availableSeats;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getCountryId()
    {
        return $this->countryId;
    }

    public function setCountryId($countryId)
    {
        $this->countryId = $countryId;
    }

    public function getAvailableSeats()
    {
        return $this->availableSeats;
    }

    public function setAvailableSeats($availableSeats)
    {
        $this->availableSeats = $availableSeats;
    }
}
