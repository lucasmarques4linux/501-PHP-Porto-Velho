<?php 

require_once 'config/config.php';
require_once 'vendor/autoload.php';

use App\Entity\User;
use App\Mapper\UserMapper;

$uMapper = new UserMapper();
echo '<pre>';

$usuario = new User();
$usuario->setNome('Mateus')
	->setEmail('mateus@gmail.com')
	->setSenha('123');

// $uMapper->create($usuario);

// ------------------------------------
$u1 = $uMapper->findById(29);
echo $u1->getId() . '<br>';
echo $u1->getNome() . '<br>';
echo $u1->getEmail() . '<br>';
echo '<hr>';

// ------------------------------------
$u2 = $uMapper->findById(13);

echo $u2->getNome() . '<br>';
$u2->setNome('Valeria');
// $uMapper->update($u2);
echo $u2->getNome() . '<br>';
print_r($u2);
echo '<hr>';

// ------------------------------------

$usuarios = $uMapper->findAll();
foreach ($usuarios as $usuario) {
	echo '<hr>';
	echo $usuario->getId() . '<br>';
	echo $usuario->getNome() . '<br>';
	echo $usuario->getEmail() . '<br>';
}
echo '<hr>';

// ------------------------------------
$u3 = $uMapper->findById(8);

$uMapper->remove($u3);