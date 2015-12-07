<?php


require_once __DIR__.'/../vendor/autoload.php';
$app = new Silex\Application();

require __DIR__.'/../app/config/dev.php'; // Lorsque l'application sera mise en production, il faudra utiliser le fichier app/config/prod.php
require __DIR__.'/../app/app.php';
require __DIR__.'/../app/routes.php';

$app->run();