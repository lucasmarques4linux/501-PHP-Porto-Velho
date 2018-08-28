<?php 

class Calculadora
{
	public static $versao = 1;

	public static function somar(int $num1,int $num2)
	{
		return $num1 + $num2;
	}

	public function subirVersão()
	{
		self::$versao ++;
	}
}

echo Calculadora::somar(1,2);