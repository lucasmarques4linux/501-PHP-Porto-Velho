<?php 

require_once 'Fretes.php';

class Pedido
{
	public $total;

	public function __construct(int $preco)
	{
		$this->total = $preco;
	}

	public function calcularTotalPedido(FreteStrategy $frete)
	{
		$this->total = $frete->calcular($this->total);

		// Jeito POG. Programação Orientada a Gambiarra.
		// if ($frete == 'normal') {
		// 	$this->total += 10;
		// } else if ($frete == 'expresso'){
		// 	$this->total += 30;
		// } else if ($frete == 'turbo'){
		// 	$this->total += 50;
		// } else {
		// 	echo 'Frete inválido';
		// }
	}

	public function verTotalPedido()
	{
		return $this->total;
	}
}

$pedido = new Pedido(50);
$pedido->calcularTotalPedido(new FreteTurbo());
echo $pedido->verTotalPedido();