<?php

namespace App;
use App\CalcularDistancia;
use App\DistanciaPetDono;
use App\CoordenadaParaRadianos;
use App\LatitudeELongitude;
use App\LatitudeEmRadianos;
use App\LongitudeEmRadianos;
use App\DistanciaEmKilometros;

interface IDistanciaPetDono
{
    public function __construct(IPet $pet, IDono $dono);
    public function calcularDistanciaPetDono(CalcularDistancia $distancia, 
    LatitudeEmRadianos $conversorRadianosLat,
    LongitudeEmRadianos $conversorRadianosLong,
    DistanciaEmKilometros $calculoDistancia 
    );
}
