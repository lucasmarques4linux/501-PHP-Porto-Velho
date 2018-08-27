<?php 

require_once 'Pessoa.php';

class PessoaFisica extends Pessoa
{
	private $cpf;
	private $rg;
	private $sexo;

	public function __construct(string $nome, string $email, string $cpf)
	{
		$this->setNome($nome);
		$this->setEmail($email);
		$this->cpf = $cpf;
	}

	public function getCpf()
	{
	    return $this->cpf;
	}
	
	public function setCpf(string $cpf)
	{
	    return $this->cpf = $cpf;
	}

	public function getRg()
	{
	    return $this->rg;
	}
	
	public function setRg(string $rg)
	{
	    return $this->rg = $rg;
	}

	public function getSexo()
	{
	    return $this->sexo;
	}
	
	public function setSexo($sexo)
	{
	    return $this->sexo = $sexo;
	}
}