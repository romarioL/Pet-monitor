<?php

namespace App\geometry;

use App\geometry\InitGeoJson;

class CriarGeoJson
{
    public function criarGeoJsonString(
        String $type,
        String $geometry,
        IInitGeoJson $init,
        String $place = "Some place"
    ): String {
        $geoJsonArray = [
            "type" =>  $type,
            "geometry" => [
                "type" => $geometry,
                "coordinates" => [$init->ListPoints()]
            ],
            "properties"  =>  [
                "name" => $place
            ]
        ];

        return json_encode($geoJsonArray);
    }
}
