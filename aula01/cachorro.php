<?php 

// Animal -> superclasse

class Animal
{
	// Caracteristicas
	// raça
	// nome
	// fome = false | true
	public $raca;
	public $nome;
	public $fome;

	public function comer()
	{
		$this->fome = false;
	}
}

// Cachorro e Gato.
class Cachorro extends Animal
{ 
	public function latir()
	{
		return "Au Au";
	}
}

class Gato extends Animal
{
	public function miar()
	{
		return "Miau..";
	}
}

echo '<pre>';

$dog1 = new Cachorro();
$dog1->raca = "vira-lata";
$dog1->nome = "bidu";
$dog1->fome = true;
var_dump($dog1);
echo '<hr>';
$dog1->comer();
var_dump($dog1);
echo '<hr>';
$cat1 = new Gato();
echo $cat1->miar();