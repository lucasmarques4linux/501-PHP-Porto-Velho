<?php 

require_once '../vendor/autoload.php';

use App\Produto\Produto;
use App\Servico\Servico;
use App\Orcamento\Orcamento;

echo '<pre>';

try {
	
	$prod1 = new Produto('',1.99);
	$servico1 = new Servico('Churrasqueiro', 100);
	var_dump($prod1);
	echo '<br>';
	var_dump($servico1);

	echo '<hr>';

	$orcamento = new Orcamento();
	$orcamento->addItem($prod1, 3); // Item, Qtd
	$orcamento->addItem($servico1, 3); // Item, Qtd
	echo $orcamento->valorTotal();
	echo '<br>';
	var_dump($orcamento);

} catch (Exception $e) {
	echo '<hr>';
	echo $e->getMessage();
}
