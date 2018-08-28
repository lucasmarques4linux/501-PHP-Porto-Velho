<?php 

require_once 'vendor/autoload.php';

$prod = new App\Src\ProdutoFilho();
$prod->toJSON();

$serv = new App\Src\Servico();
$serv->toXML();