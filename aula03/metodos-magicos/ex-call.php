<?php 

class Pessoa
{
	private $nome;
	private $email;
	private $telefone;

	public function __call(string $method,array $params)
	{
		// setNome - getNome -> Nome
		$att = lcfirst(substr($method, 3));
		// getNome -> get | setNome -> set	
		$action = substr($method, 0,3);

		echo "{$action} => {$att} <br>";

		print_r($params);
		echo '<br>';

		switch ($action) {
			case 'get':
				return $this->$att;
				break;
			case 'set':
				$this->$att = $params[0];
				break;			
			default:
				echo 'erro';
				break;
		}
	}
}


$p = new Pessoa();
$p->setNome('Lucas');
$p->setEmail('lucas@gmail.com');
echo $p->getNome() . '<br>';
echo $p->getEmail() . '<br>';