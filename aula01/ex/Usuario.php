<?php 

require_once 'PessoaFisica.php';

class Usuario extends PessoaFisica
{
	private $senha;
	private $logado;

	public function logar(string $email, string $senha)
	{
		if ($this->getEmail() == $email && $this->getSenha() == $senha) {
			$this->logado = true;
		}
	}

	public function verificarLogin()
	{
		return $this->logado;
	}

	public function setSenha(string $senha)
	{
		$this->senha = $senha;
	}

}