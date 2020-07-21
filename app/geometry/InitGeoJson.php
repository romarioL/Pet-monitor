<?php

namespace App\geometry;

use App\IPet;
use App\IDono;
use App\geometry\Point;
use App\LatitudeELongitude;

class InitGeoJson
{
    private array $points;

    public function Init(IPet $pet, IDono $dono): array
    {
        $latitudePet = $pet->getLatitude();
        $latitudeDono = $dono->getLatitude();
        $longitudePet = $pet->getLongitude();
        $longitudeDono = $dono->getLongitude();
        $petCoords = new LatitudeELongitude($latitudePet, $longitudePet);
        $donoCoords = new LatitudeELongitude($latitudeDono, $longitudeDono);
        $pointPet =  new Point($petCoords);
        $pointDono = new Point($donoCoords);
        $arrayCoords = [$pointPet, $pointDono];

        $this->points = $arrayCoords;

        return $this->points;
    }
}
