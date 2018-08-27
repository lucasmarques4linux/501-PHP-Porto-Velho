<?php 

class Caneta
{
	public $cor;
	public $marca;

	public function __construct(string $cor,string $marca)
	{
		$this->cor = $cor;
		$this->marca = $marca;
	}

	public function escrever(string $texto)
	{
		return "Estou escrevendo: {$texto}";
	}
}
echo '<pre>';
$c1 = new Caneta('azul','bic');
var_dump($c1);
echo $c1->escrever("Olá Porto Velho");
echo '<hr>';
$c2 = new Caneta('vermelha','compactor');
var_dump($c2);
echo $c2->escrever("Hello Porto Velho");