<?php

namespace Src\Site\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\ConfiguradorDistancia;
use App\Dono;
use App\Pet;
use App\Init;

class GeolocController
{
    public function index(Request $request, Response $response, array $args)
    {
        $distancia = new ConfiguradorDistancia(0.02);
        $dono = new Dono("Romis", -05.14, -38.09);

        $pet = new Pet("Bydu", -04.93, -37.97);

        $init = new Init($pet, $dono, $distancia);

        header('Content-Type: application/json');

        echo "<pre>" . $init->display();
    }
}
