<?php 

namespace App\Entity;

class User
{
	private $id;
	private $nome;
	private $email;
	private $senha;

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId(int $id)
	{
	    $this->id = $id;
	    return $this;
	}
	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome(string $nome)
	{
	    $this->nome = $nome;
	    return $this;
	}
	public function getEmail()
	{
	    return $this->email;
	}
	
	public function setEmail(string $email)
	{
	    $this->email = $email;
	    return $this;
	}
	public function getSenha()
	{
	    return $this->senha;
	}
	
	public function setSenha(string $senha)
	{
	    $this->senha = $senha;
	    return $this;
	}
}