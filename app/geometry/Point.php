<?php

namespace App\geometry;

use App\ILatitudeELongitude;

class Point
{
    private ILatitudeELongitude $latitudeELongitude;

    public function __construct(ILatitudeELongitude $latLong)
    {
        $this->latitudeELongitude = $latLong;
    }

   
    public function exportLatitude() : float
    {
        return $this->latitudeELongitude->getLatitude();
    }

    public function exportLongitude() : float
    {
        return $this->latitudeELongitude->getLongitude();
    }
}
