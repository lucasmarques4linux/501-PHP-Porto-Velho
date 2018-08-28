<?php 

interface FreteStrategy
{
	public function calcular(int $preco);
}

class FreteNormal implements FreteStrategy
{
	public function calcular(int $preco)
	{
		echo 'Frete Normal <br>';
		return 10 + $preco;
	}
}

class FreteExpresso implements FreteStrategy
{
	public function calcular(int $preco)
	{
		echo 'Frete Expresso <br>';
		return 30 + $preco;
	}
}

class FreteTurbo implements FreteStrategy
{
	public function calcular(int $preco)
	{
		echo 'Frete Turbo <br>';
		return 50 + $preco;
	}
}