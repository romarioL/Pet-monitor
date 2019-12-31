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
    public function calcular(IDistanciaPetDono $petDono)
    {
        $latitudePet= $petDono->pet->getLatitude();
        $longitudePet = $petDono->pet->getLongitude();
        $latitudeDono = $petDono->dono->getLatitude();
        $longitudeDono = $petDono->dono->getLongitude();
        $transferirParaConverterPet = new LatitudeELongitude($latitudePet, $longitudePet);
        $transferirParaConverterDono = new LatitudeELongitude($latitudeDono, $longitudeDono);
        $latitudeEmRadianos = new LatitudeEmRadianos();
        $longitudeEmRadianos = new LongitudeEmRadianos();
        $dLat = $latitudeEmRadianos->calcularLatitudeEmRadianos($transferirParaConverterPet, $transferirParaConverterDono);
        $dLon = $longitudeEmRadianos->calcularLongitudeEmRadianos($transferirParaConverterPet, $transferirParaConverterDono);
        
        $distanciaEmKilometros = new DistanciaEmKilometros();
        
        return $distanciaEmKilometros->calcularDistanciaEmKilometros($dLat, $dLon, $latitudePet, $latitudeDono);
    }
}
