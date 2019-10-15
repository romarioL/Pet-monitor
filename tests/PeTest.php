<?php
use PHPUnit\Framework\TestCase;
use App\Pet;

class PeTest extends TestCase
{
    
        public function testgetNome() 
        {
            $pet = new Pet("Bydu", 4, 5);
            $nome = $pet->getNome();
            $this->assertEquals("Bydu", $nome);
        }

        public function testsetNome() 
        {
            $pet = new Pet("Bydu", 4, 5);
            $pet->setNome("Lucas");
            $nome = $pet->getNome();
            $this->assertEquals("Lucas", $nome);
        }

         public function testgetLatitude() 
        {
            $pet = new Pet("Bydu", 4, 5);
            $latitude = $pet->getLatitude();
            $this->assertEquals(4, $latitude);
        }

        public function testsetLatitude() 
        {
            $pet = new Pet("Bydu", 4, 5);
            $pet->setLatitude(8);
            $latitude = $pet->getLatitude();
            $this->assertEquals(8, $latitude);
        }

         public function testgetLongitude() 
        {
            $pet = new Pet("Bydu", 4, 5);
            $longitude = $pet->getLongitude();
            $this->assertEquals(5, $longitude);
        }

        public function testsetLongitude() 
        {
            $pet = new Pet("Bydu", 4, 5);
            $pet->setLongitude(7);
            $longitude = $pet->getLongitude();
            $this->assertEquals(7, $longitude);
        }


    
}