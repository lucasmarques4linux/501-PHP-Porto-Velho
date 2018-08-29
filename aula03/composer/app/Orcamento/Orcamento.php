<?php 

namespace App\Orcamento;

use Exception;

class Orcamento
{
	private $itens = [];
	private $valorTotal;
	// Não permitir vazio
	private $pessoa;

	public function addItem(OrcamentoInterface $item, $qtd)
	{
		if(1 > $qtd){
			throw new Exception("A quantidade não pode ser menor que 1");	
		}
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

	public function getPessoa()
	{
	    return $this->pessoa;
	}
	
	public function setPessoa(string $pessoa)
	{
		if(!$pessoa){
			throw new Exception("Pessoa deve ser preenchido.");			
		}
	    return $this->pessoa = $pessoa;
	}
}