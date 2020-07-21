<?php

namespace App\geometry;

class ShowPoints
{
    public function ListPoints() : array
    {
        $points = $this->points;
        $arrayPoints = [];
        foreach ($points as $point) {
            $pointsArray = [
              $point->exportLatitudeELongitude()->getLatitude(),
              $point->exportLatitudeELongitude()->getLongitude()];
            array_push($arrayPoints, $pointsArray);
        }
        return $arrayPoints;
    }
}
