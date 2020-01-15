<?php

use Src\Site\Controllers\GeolocController;

$app = new \Slim\App;
$app->get('/geoloc', GeolocController::class . ':index');
$app->run();
