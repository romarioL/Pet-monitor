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

    public function exportLatitudeELongitude(): LatitudeELongitude
    {
        return $this->latitudeELongitude;
    }
}
