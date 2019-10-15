<?php
use PHPUnit\Framework\TestCase;
use App\Pet;
use App\Dono;
use App\DistanciaPetDono;
use App\EstaLonge;
use App\ConfiguradorDistancia;
use App\Monitoria;


class MonitoriaTest extends TestCase 
{
      public function testmonitorarPetLonge()
      {
      	$pet = new Pet("Bydu", 4, 5);
		$dono = new Dono("Romis", 4, 5);
		$configuradorDistancia = new ConfiguradorDistancia(0.05);
		$monitoria = new Monitoria($pet, $dono, $configuradorDistancia);
		$this->assertEquals(null, $monitoria->monitorarPetLonge());
      }
}