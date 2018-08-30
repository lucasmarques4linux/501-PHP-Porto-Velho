<?php 

class Conexao
{
	private static $instance = null;

	private function __construct(){}
	private function __clone(){}

	public static function getInstancia(string $db = 'postgres')
	{
		if ($db == 'postgres') {
			$dsn = 'pgsql:host=localhost;dbname=aula';
			$user = 'lucas';
			$pass = '123';	
		}else {
			$dsn = 'mysql:host=localhost;dbname=aula';
			$user = 'lucas';
			$pass = '@da4linux';
		}
		if (!self::$instance) {
			self::$instance = new PDO($dsn, $user,$pass);
			self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		return self::$instance;
	}
}