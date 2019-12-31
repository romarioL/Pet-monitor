<?php

namespace App;

class CoordenadaParaRadianos
{
    public function converter($coordenada)
    {
        $CoordenadaEmRadianos = deg2rad($coordenada);
         
        return $CoordenadaEmRadianos;
    }
}
