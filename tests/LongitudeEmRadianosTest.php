<?php

use PHPUnit\Framework\TestCase;
use App\LongitudeEmRadianos;
use App\Pet;
use App\Dono;
use App\LatitudeELongitude;

class LongitudeEmRadianosTest extends TestCase
{
    public function testCalcularLongitudeEmRadianos()
    {
        $pet = new Pet("Bydu", 4, 5);
        $dono = new Dono("Romis", 5, 8);
        $latitudeELongitudePet = new LatitudeELongitude($pet->getLatitude(), $pet->getLongitude());
        $latitudeELongitudeDono = new LatitudeELongitude($dono->getLatitude(), $dono->getLongitude());
        $longitudeEmRadianos = new LongitudeEmRadianos();
        $resultado = $longitudeEmRadianos->calcularLongitudeEmRadianos($latitudeELongitudePet, $latitudeELongitudeDono);
        $this->assertEquals(-0.05235987755982988, $resultado);
    }
}
