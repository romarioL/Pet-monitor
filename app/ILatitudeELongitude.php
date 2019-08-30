<?php 

namespace App; 

interface ILatitudeELongitude {
	
	
	public function __construct($latitude, $longitude);
	public function getLatitude();
	public function setLatitude($latitude);
	public function getLongitude();
	public function setLongitude($longitude);
}

