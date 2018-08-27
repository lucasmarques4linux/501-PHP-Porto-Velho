<?php 

require_once 'OrcamentoInterface.php';

class Servico implements OrcamentoInterface
{
	private $nome;
	private $descricao;
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

	public function getDescricao()
	{
	    return $this->descricao;
	}
	
	public function setDescricao(string $descricao)
	{
	    return $this->descricao = $descricao;
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