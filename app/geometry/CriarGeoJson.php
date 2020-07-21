<?php

/*

{ "type": "Feature",
         "geometry": {
           "type": "Polygon",
           "coordinates": [
             [ [100.0, 0.0], [101.0, 0.0], [101.0, 1.0],
               [100.0, 1.0], [100.0, 0.0] ]
             ]
         }
*/

namespace App\geometry;

use App\geometry\InitGeoJson;

class CriarGeoJson
{
    public function criarGeoJsonString(
       String $type,
       String $geometry,
       InitGeoJson $init,
       String $place = "Some place"
      ): String
    {
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
