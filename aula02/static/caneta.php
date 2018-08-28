<?php 

class Caneta
{
	public $cor;
	public static $ponta = 0.5;

	public function __construct(string $cor)
	{
		$this->cor = $cor;
	}

	public function verPonta()
	{
		return self::$ponta;
	}

	public function alterarPonta(float $novaPonta)
	{
		self::$ponta = $novaPonta;
	}
}

$red = new Caneta('vermelha');
$blue = new Caneta('azul');
var_dump($red);
var_dump($blue);
echo '<hr>';
echo $red->verPonta() . '<br>';
echo $blue->verPonta() . '<br>';
$blue->alterarPonta(0.7);
echo $red->verPonta() . '<br>';
echo $blue->verPonta() . '<br>';
