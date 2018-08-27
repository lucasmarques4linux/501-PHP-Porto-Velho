<?php 

require_once 'OrcamentoInterface.php';

class Produto implements OrcamentoInterface
{
	private $nome;
	private $preco;

	public function __construct(string $nome, float $preco)
	{
		$this->nome = $nome;
		$this->preco = $preco;
	}

	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome(string $nome)
	{
	    return $this->nome = $nome;
	}

	public function getPreco()
	{
	    return $this->preco;
	}
	
	public function setPreco(float $preco)
	{
	    return $this->preco = $preco;
	}
}