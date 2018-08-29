<?php 

require_once 'conexao.php';

// $query = "INSERT INTO usuarios (nome,email,senha) VALUES (?,?,?)";
$query = "INSERT INTO usuarios (nome,email,senha) VALUES (:nome,:email,:senha)";

try {
	$dbMysql->beginTransaction();

	$stmt = $dbMysql->prepare($query);
	// $stmt->execute(['Amanda','amanda@gmail.com','123']);
	// $stmt->execute(['Bruno','bruno@gmail.com','123']);
	// $stmt->execute([
	// 	':nome' => 'Marcela',
	// 	':email' => 'marcela@gmail.com',
	// 	':senha' => '123'
	// 	]);
	// $stmt->execute([
	// 	':nome' => 'Mateus',
	// 	':email' => 'mateus@gmail.com',
	// 	':senha' => '123'
	// 	]);

	$stmt->bindValue(':nome','Pedro');
	$stmt->bindValue(':email','pedro@gmail.com');
	$stmt->bindValue(':senha','123');

	$stmt->execute();

	$pessoa = [
		'nome' => 'Antonio', 
		'email' => 'antonio@gmail.com', 
		'senha' => '123'
		];

	$stmt->bindParam(':nome',$pessoa['nome']);
	$stmt->bindParam(':email',$pessoa['email']);
	$stmt->bindParam(':senha',$pessoa['senha']);

	$stmt->execute();

	$dbMysql->commit();
} catch (PDOException $e) {
	$dbMysql->rollback();
	echo $e->getMessage();
}