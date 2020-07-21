<?php

namespace App\geometry;

use App\geometry\Point;
use App\IPet;
use App\IDono;
use App\LatitudeELongitude;

class CreatePoint
{
    private array $points;

    public function Create(IPet $pet, IDono $dono): array
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

    public function addPoint(LatitudeELongitude $coords): void
    {
        $point = new Point($coords);
        array_push($this->points, $point);
    }
}
