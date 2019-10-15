<?php 
use PHPUnit\Framework\TestCase;
use App\Pet;
use App\Dono;
use App\DistanciaPetDono;
use App\EstaLonge;
use App\ConfiguradorDistancia;


class EstaLongeTest extends TestCase
{
	public function testEstaLonge()
	{
		$pet = new Pet("Bydu", 4, 5);
		$dono = new Dono("Romis", 4, 5);
		$distanciaPetDono = new DistanciaPetDono($pet, $dono);
		$configuradorDistancia = new ConfiguradorDistancia(0.05);
		$estaLonge = new EstaLonge($distanciaPetDono, $configuradorDistancia);
		$this->assertEquals(false, $estaLonge->estaLonge());

	}
}