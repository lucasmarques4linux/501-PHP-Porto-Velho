<?php 

class Pessoa
{
	private $nome;
	private $telefone;

	public function __construct(string $nome)
	{
		$this->nome = $nome;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome(string $nome)
	{
		$this->nome = $nome;
	}
}

$reflection = new ReflectionClass('Pessoa');
echo '<pre>';
print_r($reflection);
echo '<hr>';
print_r($reflection->getProperties());
echo '<hr>';
print_r($reflection->getMethods());
echo '<hr>';
echo $reflection;