<?php 

echo '<pre>';

function dividir(int $a , int $b)
{
	if ($b == 0 ) {
		throw new Exception("Não podemos dividir por 0",1);		
	}
	echo $a /$b . '<br>';
}

try {
	dividir(2,0);	
} catch (Exception $e) {
	var_dump($e);
	echo '<hr>';
	echo $e->getMessage();
	echo '<hr>';
	echo $e->getCode();
	echo '<hr>';
	echo $e->getTraceAsString();
	echo '<hr>';
} finally{
	echo 'Estou sendo executado por ultimo <br>';
}
