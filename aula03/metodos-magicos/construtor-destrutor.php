<?php 

class Pessoa
{
	public function __construct()
	{
		echo "Estou sendo iniciado <br>";
	}

	public function __destruct()
	{
		echo "Estou sendo destruido <br>";
	}
}


$p = new Pessoa();
$p2 = new Pessoa();
echo '<hr>';
unset($p);
echo '<hr>';
$p3 = new Pessoa();