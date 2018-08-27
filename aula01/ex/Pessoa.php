<?php 

abstract class Pessoa
{
	private $nome;
	private $end;
	private $tel;
	private $email;

	public function getNome()
	{
	    return $this->nome;
	}
	
	public function setNome(string $nome)
	{
	    return $this->nome = $nome;
	}

	public function getEnd()
	{
	    return $this->end;
	}
	
	public function setEnd(string $end)
	{
	    return $this->end = $end;
	}

	public function getTel()
	{
	    return $this->tel;
	}
	
	public function setTel(string $tel)
	{
	    return $this->tel = $tel;
	}

	public function getEmail()
	{
	    return $this->email;
	}
	
	public function setEmail(string $email)
	{
	    return $this->email = $email;
	}
}
