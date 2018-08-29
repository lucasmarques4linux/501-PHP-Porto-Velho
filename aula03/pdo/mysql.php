<?php 

require_once 'conexao.php';

/*
	mysql -u lucas -b aula -p

	CREATE TABLE usuarios(
		id INT PRIMARY KEY AUTO_INCREMENT,
		nome VARCHAR(255) NOT NULL,
		email VARCHAR(150) NOT NULL UNIQUE,
		senha VARCHAR(200) NOT NULL
	);

	desc usuarios;
*/

try {
	
	$id = 1;
	$nome = 'Valeria';
	$email = 'valeria@gmail.com';
	$senha = '321456';

	// $query = "INSERT INTO usuarios(nome, email, senha) VALUES('{$nome}','{$email}','{$senha}')";
	// $query = "UPDATE usuarios SET senha = '{$senha}' WHERE id = {$id}";
	// $query = "DELETE FROM usuarios WHERE id = {$id}";

	// $dbMysql->exec($query);

} catch (PDOException $e) {
	echo '<hr>';
	echo 'ERRO';
	echo '<hr>';
	echo $e->getMessage();
}

// $id = 6;
// $query = "SELECT * FROM usuarios WHERE id = {$id}";

// $stmt = $dbMysql->query($query);

// // var_dump($stmt);

// $usuario = $stmt->fetch(PDO::FETCH_OBJ);

// echo 'Id: ' . $usuario->id . '<br>';
// echo 'Nome: ' . $usuario->nome . '<br>';
// echo 'Email: ' . $usuario->email . '<br>';

$query = "SELECT * FROM usuarios";

$stmt = $dbMysql->query($query);

$usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach ($usuarios as $usuario) {
	echo 'Id: ' . $usuario->id . '<br>';
	echo 'Nome: ' . $usuario->nome . '<br>';
	echo 'Email: ' . $usuario->email . '<br>';
	echo '<hr>';
}