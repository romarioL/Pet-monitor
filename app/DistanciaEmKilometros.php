<?php

namespace App;

class DistanciaEmKilometros implements IDistanciaEmKilometros
{
    public function calcularDistanciaEmKilometros($dLat, $dLon, $latitude1, $latitude2)
    {
        $earth_radius = 6371;
        $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * sin($dLon/2) * sin($dLon/2);
        $c = 2 * asin(sqrt($a));
        $d = $earth_radius * $c;
 
        return $d;
    }
}
