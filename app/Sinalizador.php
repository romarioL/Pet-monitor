<?php 

namespace App;

use App\IObservador; 

class Sinalizador implements IObservador {
	public function estaLonge(IDono $dono) {
		
		return $dono->getNome() . " seu bichinho está muito longe de casa!";
		
	}
}