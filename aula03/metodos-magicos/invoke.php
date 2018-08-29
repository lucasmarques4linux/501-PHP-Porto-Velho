<?php 

class Orcamento
{
	public function __invoke()
	{
		echo 'Parametros <br>';
		$params = func_get_args();
		var_dump($params);
	}
}

$orcamento = new Orcamento();
$orcamento('primeiro','segundo');