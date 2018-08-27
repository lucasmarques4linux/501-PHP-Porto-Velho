<?php 

require_once 'Pessoa.php';
require_once 'Usuario.php';

class PessoaJuridica extends Pessoa
{
	private $cnpj;
	private $ie;
	private $usuarios = [];

	public function __construct (string $nome)
	{
		$this->setNome($nome);
	}

	public function getCnpj()
	{
	    return $this->cnpj;
	}
	
	public function setCnpj(string $cnpj)
	{
	    return $this->cnpj = $cnpj;
	}

	public function getIe()
	{
	    return $this->ie;
	}
	
	public function setIe(string $ie)
	{
	    return $this->ie = $ie;
	}

	public function addUsuario(Usuario $usuario)
	{
		$this->usuarios[] = $usuario;
	}

	public function getUsuarios()
	{
		return $this->usuarios;
	}
}