<?php 

namespace App;

interface IDistanciaPetDono {
	public function __construct(IPet $pet, IDono $dono);
	public function calcularDistanciaPetDono();
}