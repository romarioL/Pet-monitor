<?php

require_once "vendor/autoload.php";


use App\ConfiguradorDistancia;
use App\Dono;
use App\Pet;
use App\DistanciaPetDono;
use App\EstaLonge;
use App\Monitoria;
use App\Init;



$distancia = new ConfiguradorDistancia(0.02);
$dono = new Dono("Romis",-05.14, -38.09 );

$pet = new Pet("Bydu", -04.93, -37.97 );

$init = new Init($pet, $dono, $distancia);

 echo $init->display();





 









