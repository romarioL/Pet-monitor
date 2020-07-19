<?php

namespace App;
use App\CalcularDistancia;
use App\LatitudeELongitude;
use App\LatitudeEmRadianos;
use App\LongitudeEmRadianos;
use App\DistanciaEmKilometros;

class Init
{
    private $pet;
    private $dono;
    private $distancia;


    public function __construct(IPEt $pet, IDono $dono, IConfiguradorDistancia $distancia)
    {
        $this->pet = $pet;
        $this->dono = $dono;
        $this->distancia = $distancia;
    }

    public function display()
    {
        $monitoria = new Monitoria($this->pet, $this->dono, $this->distancia);

        return json_encode(["pet" => $this->pet->getNome(), "dono" => $this->dono->getNome(), "longe" => $monitoria->monitorarPetlonge(new CalcularDistancia(), new LatitudeEmRadianos(), new LongitudeEmRadianos(), new DistanciaEmKilometros())]);
    }
}
