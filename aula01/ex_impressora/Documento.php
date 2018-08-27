<?php 

require_once 'Imprimivel.php';

class Documento implements ImprimivelInterface
{
	private $conteudo;

	public function __construct(string $conteudo)
	{
		$this->conteudo = $conteudo;
	}

	public function getConteudo()
	{
		return $this->conteudo;
	}
}