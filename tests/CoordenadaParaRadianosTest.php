<?php
use PHPUnit\Framework\TestCase;
use App\CoordenadaParaRadianos;

class CoordenadasParaRadianosTest extends TestCase
{
    public function testconverterTest()
    {
        $radianos = new CoordenadaParaRadianos();
        $coordenada = $radianos->converter(30);
        $this->assertEquals(0.5235987755982988, $coordenada);
    }
}
