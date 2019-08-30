<?php 

namespace App;

interface IConfiguradorDistancia {
      public function __construct($distancia);
      public function getDistancia();
      public function setDistancia($distancia);
}
