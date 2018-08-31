<?php 

require_once 'config/config.php';
require_once 'vendor/autoload.php';

use App\Lib\FrontController\FrontController;

(new FrontController())->run();