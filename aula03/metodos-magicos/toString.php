<?php

class Pessoa
{
	public $nome;
	public $email;
	public $telefone;

	public function __construct(
		string $nome, 
		string $email, 
		string $telefone = ''
		)
	{
		$this->nome = $nome;
		$this->email = $email;
		$this->telefone = $telefone;
	}

	public function __toString()
	{
		return "Nome: {$this->nome} - Email: {$this->email} - Telefone: {$this->telefone}";
	}
}
echo '<pre>';
$p = new Pessoa('Lucas','lucas@gmail.com');
print_r($p);
echo '<hr>';
echo $p;