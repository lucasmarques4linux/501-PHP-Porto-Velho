<?php 

require_once 'OrcamentoInterface.php';

class Orcamento
{
	private $itens = [];
	private $valorTotal;

	public function addItem(OrcamentoInterface $item, $qtd)
	{
		$this->itens[] = ['item' => $item, 'qtd' => $qtd];
	}

	private function calcularValorTotal()
	{
		foreach ($this->itens as $item) {
			$this->valorTotal += $item['item']->getPreco() * $item['qtd'];
		}
	}

	public function valorTotal()
	{
		$this->calcularValorTotal();
		return $this->valorTotal;
	}
}