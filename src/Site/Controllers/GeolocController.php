<?php

namespace Src\Site\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\ConfiguradorDistancia;
use App\Dono;
use App\Pet;
use App\Init;
use App\geometry\InitGeoJson;
use App\LatitudeELongitude;
use App\geometry\CriarGeoJson;

class GeolocController
{
    public function index(Request $request, Response $response, array $args)
    {
        $distancia = new ConfiguradorDistancia(0.02);
        $dono = new Dono("Romis", -05.14, -38.09);

        $pet = new Pet("Bydu", -04.93, -37.97);


        $init = new Init($pet, $dono, $distancia);

        $initGeoJson = new InitGeoJson();
        $initGeoJson->Init($pet, $dono);
        $initGeoJson->addPoint(new LatitudeELongitude($pet->getLatitude(), $pet->getLongitude()));
        $initGeoJson->addPoint(new LatitudeELongitude($pet->getLatitude(), $pet->getLongitude()));
        $criarJson = new CriarGeoJson();
        echo  $criarJson->criarGeoJsonString("Feature", "Polygon", $initGeoJson);

        header('Content-Type: application/json');

        return $response->write($init->display());
    }
}
