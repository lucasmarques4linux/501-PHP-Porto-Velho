<?php 

require_once 'PessoaJuridica.php';

echo '<pre>';
$lucas = new PessoaFisica('Lucas M','lucas.marques@4linux.com.br','1112223344');
var_dump($lucas);
echo '<hr>';
$user = new Usuario('Lucas M','lucas.marques@4linux.com.br','1112223344');
$user->setSenha('123');
var_dump($user);
echo '<hr>';

$pj = new PessoaJuridica('4Linux');
$pj->addUsuario($user);
var_dump($pj);
echo '<hr>';
print_r($pj->getUsuarios()[0]->getNome());