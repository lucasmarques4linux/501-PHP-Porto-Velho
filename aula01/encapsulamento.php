<?php 

class Encapsulamento
{
	private $att1;

	public function setAtt($x)
	{
		$this->att1 = $x;
	}

	public function verAtt()
	{
		return $this->att1;
	}
}

$var1 = new Encapsulamento();
$var1->setAtt('qualquer coisa');
echo $var1->verAtt();