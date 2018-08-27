<?php 

abstract class Conta
{
	protected $saldo;
	private $numConta;
	private $titular;
	private $agencia;

	public abstract function sacar(int $valor);
	public abstract function depositar(int $valor);
	public abstract function gerarNumConta();

	public function __construct (int $saldo,string $titular)
	{
		$this->saldo = $saldo;
		$this->titular = $titular;
		$this->agencia = 'XX1';
		$this->numConta = $this->gerarNumConta();
	}

	public function setTitular(string $nome)
	{
		$this->titular = $nome;
	}

	public function getTitular()
	{
		return $this->titular;
	}

	public function getSaldo()
	{
		return $this->saldo;
	}

	public function getNumConta()
	{
		return $this->numConta;
	}

	public function getAgencia()
	{
		return $this->agencia;
	}
}

// sacar  valor - 1%
final class ContaCorrente extends Conta
{
	public function sacar(int $valor)
	{
		$this->saldo -= $valor + ($valor * 1)/100;
	}

	public function depositar(int $valor)
	{
		$this->saldo += $valor;
	}

	public function gerarNumConta()
	{
		return "CC : " . rand(100, 999);
	}
}
// sacar valor
class ContaPoupanca extends Conta
{
	public $saldoPoup;

	public function sacar(int $valor)
	{
		// $this->saldo = $this->saldo - $valor;
		$this->saldo -= $valor;
	}

	public function depositar(int $valor)
	{
		$this->saldo += $valor + 1;
	}

	public final function gerarNumConta()
	{
		return "CP : " . rand(1000, 9999);
	}
}

final class ContaPoupancaUniversitaria extends ContaPoupanca
{
	public $faculdade;
}

echo '<pre>';

$cc = new ContaCorrente(500, '4linux');
$cc->sacar(100);
var_dump($cc);
echo '<hr>';
$cp = new ContaPoupanca(100, 'Lucas');
$cp->sacar(50);
var_dump($cp);
