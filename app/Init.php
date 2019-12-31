<?php

namespace App;

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
        return $monitoria->monitorarPetlonge();
    }
}
