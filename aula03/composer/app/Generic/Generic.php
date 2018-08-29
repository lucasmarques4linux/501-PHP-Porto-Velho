<?php 

namespace App\Generic;

use Exception;

abstract class Generic
{
	protected $nome;
	protected $preco;

	public function __construct(string $nome, float $preco)
	{
		$this->setNome($nome);
		$this->setPreco($preco);
	}

	public function getNome()
	{
	    return $this->nome;
	}
	
	// Não pode valor vazio
	public function setNome(string $nome)
	{
		if (!$nome) {
			throw new Exception("Nome precisa ser preenchido");		
		}
	    return $this->nome = $nome;
	}

	public function getPreco()
	{
	    return $this->preco;
	}
	
	// Não pode valor vazio
	// Não pode valor negativo
	public function setPreco(float $preco)
	{
		if (!$preco) {
			throw new Exception("Preço precisa ser preenchido");		
		}
		if (0 > $preco) {
			throw new Exception("Preço não pode ser negativo");		
		}
	    return $this->preco = $preco;
	}
}