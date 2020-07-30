<?php

namespace App\geometry;

use App\IPet;
use App\IDono;
use App\ILatitudeELongitude;

interface IInitGeoJson
{
    public function Init(IPet $pet, IDono $dono): array;
    public function addPoint(ILatitudeELongitude $coords): void;
    public function ListPoints() : array;
    public function Run(
        IPet $pet,
        IDono $dono,
        array $points,
        String $type,
        String $geometry,
        String $place = "Some place"
    ) : String;
}
