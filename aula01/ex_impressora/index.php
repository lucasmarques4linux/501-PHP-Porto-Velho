<?php 

require_once 'Documento.php';
require_once 'Planilha.php';
require_once 'Impressora.php';

echo '<pre>';

$doc = new Documento('Olá Mundo');
$imp = new Impressora();
$imp->imprimir($doc);
echo '<hr>';
// $imp->imprimir('Olá Mundo');
$plan = new Planilha(['linha1','linha2']);
$imp->imprimir($plan);