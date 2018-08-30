<?php 

namespace App\Mapper;

use App\Repository\UserRepositoryInterface;
use App\Entity\User;
use App\Db\Connection;
use PDO;

class UserMapper implements UserRepositoryInterface
{
	public function findAll()
	{
		$sql = "SELECT * FROM usuarios ORDER BY id";

		try {
			$con = Connection::getInstance();
			$con->beginTransaction();
			$stmt = $con->prepare($sql);
			$stmt->execute();
			$users = $stmt->fetchAll(PDO::FETCH_CLASS,User::class);
			$con->commit();
			return $users;			
		} catch (PDOException $e) {
			$con->rollback();
			return $e->getMessage();	
		}
	}

	public function findById(int $id)
	{
		$sql = "SELECT * FROM usuarios WHERE id = :id";

		try {
			$con = Connection::getInstance();
			$con->beginTransaction();
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':id',$id);
			$stmt->execute();
			$user = $stmt->fetchObject(User::class);
			$con->commit();
			return $user;			
		} catch (PDOException $e) {
			$con->rollback();
			return $e->getMessage();	
		}
	}

	public function create (User $user)
	{
		$sql = "INSERT INTO usuarios (nome,email,senha) VALUES (:name,:email,:pass)";
		try {
			$con = Connection::getInstance();
			$con->beginTransaction();
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':name',$user->getNome());
			$stmt->bindValue(':email',$user->getEmail());
			$stmt->bindValue(':pass',$user->getSenha());
			$stmt->execute();
			$con->commit();
			return $user;
		} catch (PDOException $e) {
			$con->rollback();
			return $e->getMessage();
		}
	}

	public function update(User $user)
	{
		$sql = "UPDATE usuarios SET nome=:name,email=:email,senha=:pass WHERE id=:id";
		try {
			$con = Connection::getInstance();
			$con->beginTransaction();
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':name',$user->getNome());
			$stmt->bindValue(':email',$user->getEmail());
			$stmt->bindValue(':pass',$user->getSenha());
			$stmt->bindValue(':id',$user->getId());
			$stmt->execute();
			$con->commit();
			return $user;
		} catch (PDOException $e) {
			$con->rollback();
			return $e->getMessage();
		}
	}

	public function remove(User $user)
	{
		$sql = "DELETE FROM usuarios WHERE id=:id";

		try {
			$con = Connection::getInstance();
			$con->beginTransaction();
			$stmt = $con->prepare($sql);
			$stmt->bindValue(":id",$user->getId());
			$return = $stmt->execute();
			$con->commit();
			return $return;			
		} catch (PDOException $e) {
			$con->rollback();
			return $e->getMessage();	
		}
	}
}