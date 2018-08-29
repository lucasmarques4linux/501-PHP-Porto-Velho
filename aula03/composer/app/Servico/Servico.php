<?php 

namespace App\Servico;

use App\Orcamento\OrcamentoInterface;
use App\Generic\Generic;
use Exception;

class Servico extends Generic implements OrcamentoInterface
{
	private $descricao;

	public function getDescricao()
	{
	    return $this->descricao;
	}
	
	public function setDescricao(string $descricao)
	{
		if (!$descricao) {
			throw new Exception("Descrição precisa ser preenchido");		
		}
	    return $this->descricao = $descricao;
	}
}