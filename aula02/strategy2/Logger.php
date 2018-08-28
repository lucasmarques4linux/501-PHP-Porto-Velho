<?php 

require_once 'TiposLog.php';

class Logger
{
	public function registrarLog(LogStrategy $log, $msg)
	{
		$log->salvarLog($msg);
	}
}

$logger = new Logger();
$logger->registrarLog(new LogJSON(), 'Acessando o banco de dados');
