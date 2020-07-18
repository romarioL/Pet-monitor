<?php

namespace App;

use App\IPet;
use App\IDono;
use App\CalcularDistancia;
use App\DistanciaPetDono;
use App\CoordenadaParaRadianos;
use App\LatitudeELongitude;
use App\LatitudeEmRadianos;
use App\LongitudeEmRadianos;
use App\DistanciaEmKilometros;

class DistanciaPetDono implements IDistanciaPetDono
{
    public $pet;
    
    public $dono;

    private $petEdono;
    
    public function __construct(IPet $pet, IDono $dono)
    {
        $this->pet = $pet;
        $this->dono = $dono;
    }
    
    public function calcularDistanciaPetDono(CalcularDistancia $distancia, 
    LatitudeEmRadianos $conversorRadianosLat,
    LongitudeEmRadianos $conversorRadianosLong,
    DistanciaEmKilometros $calculoDistancia)
    {
        return $distancia->calcular($this, $conversorRadianosLat, $conversorRadianosLong, $calculoDistancia);
    }
}
