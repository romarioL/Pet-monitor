<?php

use PHPUnit\Framework\TestCase;
use App\Dono;

class DonoTest extends TestCase
{
    public function testgetNome()
    {
        $dono = new Dono("Romis", 4, 5);
        $nome = $dono->getNome();
        $this->assertEquals("Romis", $nome);
    }

    public function testsetNome()
    {
        $dono = new Dono("Romis", 4, 5);
        $dono->setNome("Lucas");
        $nome = $dono->getNome();
        $this->assertEquals("Lucas", $nome);
    }

    public function testgetLatitude()
    {
        $dono = new Dono("Romis", 4, 5);
        $latitude = $dono->getLatitude();
        $this->assertEquals(4, $latitude);
    }

    public function testsetLatitude()
    {
        $dono = new Dono("Romis", 4, 5);
        $dono->setLatitude(8);
        $latitude = $dono->getLatitude();
        $this->assertEquals(8, $latitude);
    }

    public function testgetLongitude()
    {
        $dono = new Dono("Romis", 4, 5);
        $longitude = $dono->getLongitude();
        $this->assertEquals(5, $longitude);
    }

    public function testsetLongitude()
    {
        $dono = new Dono("Romis", 4, 5);
        $dono->setLongitude(7);
        $longitude = $dono->getLongitude();
        $this->assertEquals(7, $longitude);
    }
}
