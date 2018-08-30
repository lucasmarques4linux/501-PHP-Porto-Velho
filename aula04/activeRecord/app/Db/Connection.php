<?php 

namespace App\Db;

use PDO;

class Connection
{
	private static $instance = null;

	private function __construct(){}
	private function __clone(){}

	public static function getInstance()
	{
		if (!self::$instance) {
			// "pgsql:host=localhost;dbname=aula","lucas","123"
			self::$instance = new PDO(DBDRIVER.':host='.DBHOST.';dbname='.DBNAME, DBUSER,DBPASS);
			self::$instance->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		return self::$instance;
	}
}