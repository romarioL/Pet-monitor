<?php

use PHPUnit\Framework\TestCase;
use App\LatitudeELongitude;

class LatitudeELongitudeTest extends TestCase
{
    public function testgetLatitude()
    {
        $latitudeELongitude = new LatitudeELongitude(4, 5);
        $latitude = $latitudeELongitude->getLatitude();
        $this->assertEquals(4, $latitude);
    }

    public function testsetLatitude()
    {
        $latitudeELongitude = new LatitudeELongitude(4, 5);
        $latitudeELongitude->setLatitude(8);
        $latitude = $latitudeELongitude->getLatitude();
        $this->assertEquals(8, $latitude);
    }

    public function testgetLongitude()
    {
        $latitudeELongitude = new LatitudeELongitude(4, 5);
        $longitude = $latitudeELongitude->getLongitude();
        $this->assertEquals(5, $longitude);
    }

    public function testsetLongitude()
    {
        $latitudeELongitude = new LatitudeELongitude(4, 5);
        $latitudeELongitude->setLongitude(7);
        $longitude = $latitudeELongitude->getLongitude();
        $this->assertEquals(7, $longitude);
    }
}
