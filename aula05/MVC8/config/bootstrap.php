<?php 

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
		'driver' 	=> DBDRIVER,
		'host'		=> DBHOST,
		'database'	=> DBNAME,
		'username'	=> DBUSER,
		'password'	=> DBPASS
	]);

$capsule->setAsGlobal();

$capsule->bootEloquent();