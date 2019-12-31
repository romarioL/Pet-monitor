<?php

use PHPUnit\Framework\TestCase;
use App\Pet;
use App\Dono;
use App\DistanciaPetDono;

class CalcularDistanciaTest extends TestCase
{
    public function testCalcular()
    {
        $dono = new Dono("Romis", 4, 5);
        $pet = new Pet("Bydu", 4, 5);

        $distancia = new DistanciaPetDono($pet, $dono);
        $distancia = $distancia->calcularDistanciaPetDono();
        $this->assertEquals(0, $distancia);
    }
}
