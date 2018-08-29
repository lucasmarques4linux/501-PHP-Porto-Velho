<?php 

class Pessoa
{
	// public $nome;
	// public $email;

	public $data = [];

	// public function __get($name)
	// {
	// 	echo "Tentou acessar a propriedade {$name} <br>";
	// }

	// public function __set($prop, $value)
	// {
	// 	echo "Tentou atribuir {$prop} = {$value} <br>";
	// }

	// private function __set($prop,$value){}
	// private function __get($prop){}

	public function __set($prop, $value)
	{
		$this->data[$prop] = $value;
	}

	public function __get($prop)
	{
		return $this->data[$prop];
	}
}
echo '<pre>';
$p = new Pessoa();
$p->nome = "Lucas";
$p->telefone = "11 99999 8888";
$p->genero = "M";
$p->email = "lucas@gmail.com";
echo '<hr>';
echo $p->nome . '<br>';
echo $p->telefone . '<br>';
echo $p->genero . '<br>';
echo $p->email . '<br>';
print_r($p);