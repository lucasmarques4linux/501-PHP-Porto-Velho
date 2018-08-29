<?php 

class Pessoa
{
	public function __call($method, $params)
	{
		print_r($params);
		echo '<hr>';
		$params = implode(',', $params);
		echo "Tentou invocar o método {$method} passando {$params}";
	}

	public static function __callStatic($method, $params)
	{
		print_r($params);
		echo '<hr>';
		$params = implode(',', $params);
		echo "Tentou invocar o método {$method} passando {$params}";
	}
}
echo '<pre>';
$p = new Pessoa();
$p->comprar('Carne','Refri','Carvao');
echo '<hr>';
Pessoa::comprar('Agua');