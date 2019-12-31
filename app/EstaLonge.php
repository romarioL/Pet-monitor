<?php

namespace App;

use App\IDistanciaPetDono;
use App\IConfiguradorDistancia;

class EstaLonge
{
    public $petEDono;
    
    public function __construct(IDistanciaPetDono $petEDono, IConfiguradorDistancia $distancia)
    {
        $this->petEDono = $petEDono;
        $this->distancia = $distancia;
    }
    
    public function estaLonge()
    {
        if ($this->petEDono->calcularDistanciaPetDono() <= $this->distancia->getDistancia()) {
            return false;
        }
    
        return true;
    }
}
