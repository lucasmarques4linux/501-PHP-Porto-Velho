<?php 

require_once 'config/config.php';
require_once 'vendor/autoload.php';

use App\Model\User;

echo '<pre>';
$usuario = new User();
$usuario->setName('Lucas')
	->setEmail('lucas@gmail.com')
	->setPass('123');
// $usuario->save();
print_r($usuario);
echo '<hr>';
// //------------------------------------
$u1 = User::find(19);
echo $u1->getId() . '<br>';
echo $u1->getName() . '<br>';
echo $u1->getEmail() . '<br>';
echo '<hr>';
// //------------------------------------
$u2 = User::find(6);

echo $u2->getName() . '<br>';
$u2->setName('Valeria');
$u2->save();
echo $u2->getName() . '<br>';
print_r($u2);
echo '<hr>';
// //------------------------------------

$usuarios = User::all();
foreach ($usuarios as $usuario) {
	echo '<hr>';
	echo $usuario->getId() . '<br>';
	echo $usuario->getName() . '<br>';
	echo $usuario->getEmail() . '<br>';
}
echo '<hr>';
// // ----------------------------------

$u3 = User::find(14);
$u3->remove();
var_dump($u3);
if(!$u3->getId()){
	echo "Removido com sucesso";
}