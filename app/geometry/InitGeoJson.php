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

    public function addPoint(LatitudeELongitude $coords): void
    {
        $point = new Point($coords);
        array_push($this->points, $point);
    }
    public function ListPoints() : array
    {
        $points = $this->points;
        $arrayPoints = [];
        foreach ($points as $point) {
            $pointsArray = [
              $point->exportLatitudeELongitude()->getLatitude(),
              $point->exportLatitudeELongitude()->getLongitude()];
            array_push($arrayPoints, $pointsArray);
        }
        return $arrayPoints;
    }

    public function Run()
    {
    }
}
