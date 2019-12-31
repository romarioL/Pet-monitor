<?php

namespace App;

use App\IPet;
use App\IDono;
use App\CalcularDistancia;

class DistanciaPetDono implements IDistanciaPetDono
{
    public $pet;
    
    public $dono;
    
    public function __construct(IPet $pet, IDono $dono)
    {
        $this->pet = $pet;
        $this->dono = $dono;
    }
    
    public function calcularDistanciaPetDono()
    {
        $calcular = new CalcularDistancia();
        return $calcular->calcular($this);
    }
}
