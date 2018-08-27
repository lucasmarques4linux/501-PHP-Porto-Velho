<?php 

require_once 'Imprimivel.php';

class Impressora
{
	public function imprimir(ImprimivelInterface $doc)
	{
		echo $doc->getConteudo();
	}
}