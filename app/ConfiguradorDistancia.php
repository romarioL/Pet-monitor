<?php 

namespace App;
use App\IConfiguradorDistancia;

class ConfiguradorDistancia implements IConfiguradorDistancia {
    private $distancia;


   public function __construct($distancia) {
   	    $this->distancia = $distancia;
   }
    public function getDistancia() {
       return $this->distancia;
     }

    public function setDistancia($distancia) { 
          $this->distancia = $distancia;
}


}

