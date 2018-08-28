<?php 

class BancoDeDadosException extends Exception{}

function conectar($db)
{
	if($db != 'mysql'){
		throw new BancoDeDadosException("Banco de dados não encontrado");
	}

	// $con = true;

	throw new Exception("Error Processing Request");
	
}

try {

	conectar('mysql');
	
} catch (Exception $e) {
	echo $e->getMessage();
} catch (BancoDeDadosException $e) {
	echo $e->getMessage();
}