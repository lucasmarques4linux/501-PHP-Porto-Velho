<?php 

require_once 'conexao.php';

try {
	$dbPostgres->beginTransaction();

	$query = "INSERT INTO usuarios(nome, email, senha) VALUES('Jose','jose@gmail.com','123')";
	$dbPostgres->exec($query);

	$query = "INSERT INTO usuarios(nome, email, senha) VALUES('Joao','joao@gmail.com','123')";
	$dbPostgres->exec($query);

	$query = "INSERT INTO usuarios(nome, email, senha) VALUES('Jose','jose2@gmail.com','123')";
	$dbPostgres->exec($query);


	$dbPostgres->commit();
} catch (PDOException $e) {
	$dbPostgres->rollback();
	echo '<hr>';
	echo 'ERRO';
	echo '<hr>';
	echo $e->getMessage();
}