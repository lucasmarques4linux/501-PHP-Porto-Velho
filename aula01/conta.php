<?php 

abstract class Conta
{
	public $saldo;
	public $numConta;
	public $titular;
	public $agencia;

	public function sacar()
	{
		echo 'sacando<br>';
	}
}

class ContaCorrente extends Conta{}
class ContaPoupanca extends Conta
{
	public $saldoPoup;
}
echo '<pre>';

// $conta = new Conta();
// var_dump($conta);

$cc = new ContaCorrente();
$cc->sacar();
var_dump($cc);
echo '<hr>';
$cp = new ContaPoupanca();
$cp->sacar();
var_dump($cp);
