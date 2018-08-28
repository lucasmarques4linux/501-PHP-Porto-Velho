<?php 

class Pessoa
{
	// M e F
	const ARR_GENERO = ['M' => 'Masculino', 'F' => 'Feminino'];
	public $nome;
	public $genero;

	// Lucas , M
	// Maria , F
	public function __construct(string $nome, string $genero)
	{
		$this->nome = $nome;
		$this->genero = $genero;
	}

	public function getGenero()
	{
		return self::ARR_GENERO[$this->genero];
	}
}

$p1 = new Pessoa('Jose', 'M');
$p2 = new Pessoa('Maria', 'F');
echo $p1->getGenero() . '<br>';
echo $p2->getGenero() . '<br>';
print_r(Pessoa::ARR_GENERO);