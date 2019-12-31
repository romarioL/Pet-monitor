<?php

namespace App;

use App\ILatitudeELongitude;
use App\CoordenadaParaRadianos;

class LongitudeEmRadianos
{
    public function calcularLongitudeEmRadianos(ILatitudeELongitude $long1, ILatitudeELongitude $long2)
    {
        $longitude1 = $long1->getLongitude();
        $longitude2 = $long2->getLongitude();
        $conversor = new CoordenadaParaRadianos();
        
        return $conversor->converter($longitude1 - $longitude2);
    }
}
