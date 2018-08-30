<?php 

use Illuminate\Database\Capsule\Manager as Capsule;

require_once 'config.php';

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => DBDRIVER,
    'host'      => DBHOST,
    'database'  => DBNAME,
    'username'  => DBUSER,
    'password'  => DBPASS,
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();