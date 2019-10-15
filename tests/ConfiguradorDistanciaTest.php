<?php 

use PHPUnit\Framework\TestCase;
use App\ConfiguradorDistancia;

class ConfiguradorDistanciaTest extends TestCase
{
	 public function testgetDistancia() 
        {
           $configuradorDistancia = new ConfiguradorDistancia(0.05);
           $this->assertEquals(0.05, $configuradorDistancia->getDistancia());
        }

        public function testsetDistancia() 
        {
           $configuradorDistancia = new ConfiguradorDistancia(0.05);
           $configuradorDistancia->setDistancia(0.02);
           $this->assertEquals(0.02, $configuradorDistancia->getDistancia());
        }
}