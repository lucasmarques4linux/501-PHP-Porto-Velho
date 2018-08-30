<?php 

if ($dbSelected == 'postgres') {
	require_once 'banco/postgres.php';
} else {
	require_once 'banco/mysql.php';
}

Class Usuarios
{
	public static function salvar(array $dados)
	{
		global $db;
		if (!empty($dados['id'])) {
			$sql = "UPDATE usuarios SET nome=:nome,email=:email WHERE id=:id";
		} else {
			$sql = "INSERT INTO usuarios (nome,email,senha) VALUES (:nome,:email,'123')";
		}

		try {
			$db->beginTransaction();
			$stmt = $db->prepare($sql);
			$stmt->bindValue(':nome',$dados['nome']);
			$stmt->bindValue(':email',$dados['email']);
			if (!empty($dados['id'])) {
				$stmt->bindValue(':id',$dados['id']);
			}
			$stmt->execute();
			$db->commit();
		} catch (PDOException $e) {
			$db->rollback();
			echo $e->getMessage();
		}


	}
	public static function remover(int $id)
	{
		global $db;
		try {
			$db->beginTransaction();
			$sql = "DELETE FROM usuarios WHERE id = :id";
			$stmt = $db->prepare($sql);
			$stmt->bindValue(':id',$id);
			$stmt->execute();
			$db->commit();
		} catch (PDOException $e) {
			$db->rollback();
			echo $e->getMessage();
		}
	}
	public static function buscarPorId(int $id)
	{
		global $db;
		try {
			$sql = "SELECT * FROM usuarios WHERE id = :id";
			$stmt = $db->prepare($sql);
			$stmt->bindValue(':id',$id);
			$stmt->execute();
			$usuario = $stmt->fetch(PDO::FETCH_OBJ);
			return $usuario;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	public static function buscarTodos()
	{
		global $db;
		try {
			$sql = "SELECT * FROM usuarios ORDER BY id";
			$stmt = $db->prepare($sql);
			$stmt->execute();
			$usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);
			return $usuarios;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
}