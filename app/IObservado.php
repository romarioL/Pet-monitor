<?php

namespace App;

use App\EstaLonge;

interface IObservado
{
    public function monitorarPetLonge(
        CalcularDistancia $calcularDistancia,
        LatitudeEmRadianos $latitudeEmRadianos,
        LongitudeEmRadianos $longitudeEmRadianos,
        DistanciaEmKilometros $distancia
    );
}
