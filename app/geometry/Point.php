<?php

namespace App\geometry;

use App\LatitudeELongitude;

class Point
{
    private LatitudeELongitude $latitudeELongitude;

    public function __construct(LatitudeELongitude $latLong)
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
