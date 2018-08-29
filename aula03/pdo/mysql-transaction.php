<?php 

require_once 'conexao.php';

try {
	$dbMysql->beginTransaction();

	$query = "INSERT INTO usuarios(nome, email, senha) VALUES('Jose','jose@gmail.com','123')";
	$dbMysql->exec($query);

	$query = "INSERT INTO usuarios(nome, email, senha) VALUES('Joao','joao@gmail.com','123')";
	$dbMysql->exec($query);

	$query = "INSERT INTO usuarios(nome, email, senha) VALUES('Jose','jose2@gmail.com','123')";
	$dbMysql->exec($query);


	$dbMysql->commit();
} catch (PDOException $e) {
	$dbMysql->rollback();
	echo '<hr>';
	echo 'ERRO';
	echo '<hr>';
	echo $e->getMessage();
}