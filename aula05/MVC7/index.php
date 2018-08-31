<?php 

require_once 'config/config.php';
require_once 'vendor/autoload.php';

use App\Lib\FrontController\FrontController;


$routes = require 'routes/routes.php';

$app = new FrontController();
$app->setRoutes($routes);
$app->setRouteDefault('home/index');
$app->run();