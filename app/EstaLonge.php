<?php

namespace App;

use App\IDistanciaPetDono;
use App\IConfiguradorDistancia;
use App\CalcularDistancia;
use App\DistanciaPetDono;
use App\CoordenadaParaRadianos;
use App\LatitudeELongitude;
use App\LatitudeEmRadianos;
use App\LongitudeEmRadianos;
use App\DistanciaEmKilometros;

class EstaLonge
{
    private $petEDono;
    
    public function __construct(IDistanciaPetDono $petEDono, IConfiguradorDistancia $distancia)
    {
        $this->petEDono = $petEDono;
        $this->distancia = $distancia;
    }
    
    public function estaLonge(
        CalcularDistancia $calculadorDistancia,
        LatitudeEmRadianos $conversorRadianosLat,
        LongitudeEmRadianos $conversorRadianosLong,
        DistanciaEmKilometros $calculoDistancia
    )
    {
        if ($this->petEDono->calcularDistanciaPetDono(
            $calculadorDistancia,
            $conversorRadianosLat,
            $conversorRadianosLong,
            $calculoDistancia
        ) <= $this->distancia->getDistancia()) {
            return false;
        }
    
        return true;
    }
}
