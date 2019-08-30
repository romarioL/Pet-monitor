<?php 

namespace App;

interface IDistanciaEmKilometros {
	public function calcularDistanciaEmKilometros($dLat, $dLon, $latitude1, $latitude2);
}