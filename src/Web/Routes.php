<?php

use Src\Site\Controllers\GeolocController;

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);
$app->get('/', GeolocController::class .  ':index');
$app->run();
