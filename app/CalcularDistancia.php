<?php

namespace App;

use App\DistanciaPetDono;
use App\CoordenadaParaRadianos;
use App\LatitudeELongitude;
use App\LatitudeEmRadianos;
use App\LongitudeEmRadianos;
use App\DistanciaEmKilometros;

class CalcularDistancia
{
    public function calcular(IDistanciaPetDono $petDono, 
                             LatitudeEmRadianos $conversorRadianosLat,
                             LongitudeEmRadianos $conversorRadianosLong,
                             DistanciaEmKilometros $calculoDistancia
                              )
    {
        $latitudePet= $petDono->getPet()->getLatitude();
        $longitudePet = $petDono->getPet()->getLongitude();
        $latitudeDono = $petDono->getDono()->getLatitude();
        $longitudeDono = $petDono->getDono()->getLongitude();
        $transferirParaConverterPet = new LatitudeELongitude($latitudePet, $longitudePet);
        $transferirParaConverterDono = new LatitudeElongitude($latitudeDono, $longitudeDono);
        $dLat = $conversorRadianosLat->calcularLatitudeEmRadianos($transferirParaConverterPet, $transferirParaConverterDono);
        $dLon = $conversorRadianosLong->calcularLongitudeEmRadianos($transferirParaConverterPet, $transferirParaConverterDono);    
        return $calculoDistancia->calcularDistanciaEmKilometros($dLat, $dLon, $latitudePet, $latitudeDono);
    }
}
