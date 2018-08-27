<?php 

require_once 'Imprimivel.php';

class Planilha implements ImprimivelInterface
{
	private $conteudo;

	public function __construct(array $conteudo)
	{
		$this->conteudo = $conteudo;
	}
	public function getConteudo()
	{
		$msg = '';
		foreach ($this->conteudo as $linha) {
			$msg .= $linha . '<br>';
		}
		return $msg;
	}
}