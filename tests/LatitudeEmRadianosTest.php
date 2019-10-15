<?php 

use PHPUnit\Framework\TestCase;
use App\LatitudeEmRadianos;
use App\Pet;
use App\Dono;
use App\LatitudeELongitude;

class LatitudeEmRadianosTest extends TestCase 
{
	public function testCalcularLatidtudeEmRadianos() 
	{
         $pet = new Pet("Bydu", 4, 5);
         $dono = new Dono("Romis", 5, 5);
         $latitudeELongitudePet = new LatitudeELongitude($pet->getLatitude(), $pet->getLongitude());
         $latitudeELongitudeDono = new LatitudeELongitude($dono->getLatitude(), $dono->getLongitude());
         $latitudeEmRadianos = new LatitudeEmRadianos();
         $resultado = $latitudeEmRadianos->calcularLatitudeEmRadianos($latitudeELongitudePet, $latitudeELongitudeDono);
         $this->assertEquals(-0.017453292519943295, $resultado);  
	}
}