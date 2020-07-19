<?php

namespace App;

use App\EstaLonge;
use App\IObservado;
use App\IPet;
use App\IDono;
use App\Sinalizador;
use App\DistanciaPetDono;
use App\ConfiguradorDistancia;
use App\CalcularDistancia;
use App\CoordenadaParaRadianos;
use App\LatitudeELongitude;
use App\LatitudeEmRadianos;
use App\LongitudeEmRadianos;
use App\DistanciaEmKilometros;

class Monitoria implements IObservado
{
    private $pet;
    private $dono;
    private $distancia;
    private $petDono;
    
    public function __construct(IPet $pet, IDono $dono, IConfiguradorDistancia $distancia)
    {
        $this->pet = $pet;
        $this->dono = $dono;
        $this->distancia = $distancia;
    }
    
    public function monitorarPetLonge(CalcularDistancia $calcularDistancia,
                                      LatitudeEmRadianos $latitudeEmRadianos,
                                      LongitudeEmRadianos $longitudeEmRadianos,
                                      DistanciaEmKilometros $distancia)
    {
        $estaLonge = new EstaLonge(new DistanciaPetDono($this->pet, $this->dono), $this->distancia);
        if ($estaLonge->estaLonge($calcularDistancia, $latitudeEmRadianos, $longitudeEmRadianos,$distancia) == true) {
            $sinalizador = new Sinalizador();
            return  $sinalizador->estaLonge($this->dono);
        }
    }
}
