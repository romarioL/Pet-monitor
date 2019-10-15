<?php

use PHPUnit\Framework\TestCase;
use App\Pet;
use App\Dono;
use App\LatitudeEmRadianos;
use App\LongitudeEmRadianos;
use App\LatitudeELongitude;
use App\DistanciaEmKilometros;



class DistanciaEMKilometrosTest extends TestCase 
{
	public function testCalcular()
	{
         $dono = new Dono("Romis", 4, 5);
         $pet = new Pet("Bydu", 4, 5);

        $donoLatitude = $dono->getLatitude();
        $donoLongitude = $dono->getLongitude();
        $petLatitude = $pet->getLatitude();
        $petLongitude = $pet->getLongitude();

        $donoLatitudeELongitude = new LatitudeELongitude($donoLatitude, $donoLongitude);
        $petLatitudeELongitude = new LatitudeELongitude($petLatitude, $petLongitude);

        $distanciaLatitudeObj = new LatitudeEmRadianos();
        $distanciaLatitude = $distanciaLatitudeObj->calcularLatitudeEmRadianos($donoLatitudeELongitude, $petLatitudeELongitude);

        $distanciaLongitudeObj = new LongitudeEmRadianos();
        $distanciaLongitude = $distanciaLongitudeObj->calcularLongitudeEmRadianos($donoLatitudeELongitude, $petLatitudeELongitude);

        $distanciaEmKilometrosObj = new DistanciaEmKilometros();
        $distanciaEmKilometros= $distanciaEmKilometrosObj->calcularDistanciaEmKilometros($distanciaLatitude, $distanciaLongitude, $donoLatitude, $petLatitude);

        $this->assertEquals(0, $distanciaEmKilometros);
	}
}