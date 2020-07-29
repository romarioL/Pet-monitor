<?php

namespace App\geometry;

use App\IPet;
use App\IDono;
use App\geometry\CreatePoint;
use App\ILatitudeELongitude;
use App\LatitudeELongitude;
use App\geometry\IInitGeoJson;
use App\geometry\CriarGeoJson;

class InitGeoJson implements IInitGeoJson
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

    public function addPoint(ILatitudeELongitude $coords): void
    {
        $point = new Point($coords);
        array_push($this->points, $point);
    }

    public function ListPoints() : array
    {
        $arrayPoints = [];
        foreach ($this->points as $point) {
            $pointsArray = [
              $point->exportLatitude(),
              $point->exportLongitude()];
            array_push($arrayPoints, $pointsArray);
        }
        return $arrayPoints;
    }

    public function Run(IPet $pet, IDono $dono, array $points) : String
    {
        $this->Init($pet, $dono);
        foreach ($points as $point) {
            $this->addPoint($point);
        }
        $criargeoJson = new CriarGeoJson();
        return  $criargeoJson->criarGeoJsonString("Feature", "Polygon", $this);
    }
}
