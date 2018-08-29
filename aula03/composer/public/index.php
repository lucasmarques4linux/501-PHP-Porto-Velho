<?php 

require_once '../vendor/autoload.php';

use App\Produto\Produto;
use App\Servico\Servico;
use App\Orcamento\Orcamento;

echo '<pre>';

try {
	
	$prod1 = new Produto('Guarana',1.99);
	$servico1 = new Servico('Churrasqueiro', 100);
	$orcamento = new Orcamento();
	$orcamento->addItem($prod1, 0); // Item, Qtd
	$orcamento->addItem($servico1, 3); // Item, Qtd

	$msg = [
		'error' => false,
		'message' => 'Orçamento feito com sucesso'
	];

} catch (Exception $e) {

	$msg = [
		'error' => true,
		'message' => $e->getMessage()
	];

} finally{
	print_r($msg);
}
