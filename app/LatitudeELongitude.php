<?php

namespace App;

use App\ILatitudeELongitude;

class LatitudeELongitude implements ILatitudeELongitude
{
    private $latitude;
    
    private $longitude;
    
    
    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        
        $this->longitude = $longitude;
    }
    
    public function getLatitude()
    {
        return $this->latitude;
    }
    
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }
    
    public function getLongitude()
    {
        return $this->longitude;
    }
    
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
}
