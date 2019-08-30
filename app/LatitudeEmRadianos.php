<?php 

namespace App;

use App\ILatitudeELongitude;

use App\CoordenadaParaRadianos;

class LatitudeEmRadianos {
	
	public function calcularLatitudeEmRadianos(ILatitudeELongitude $lat1, ILatitudeELongitude $lat2) {
		
		
		$latitude1 = $lat1->getLatitude();
		$latitude2 = $lat2->getLatitude();
		
		$conversor = new CoordenadaParaRadianos();
		
		return $conversor->converter($latitude1 - $latitude2);
		
		
		 
		 
	}
}

