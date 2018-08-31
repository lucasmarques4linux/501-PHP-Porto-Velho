<?php 

namespace App\Model;

use App\Model\Interfaces\ActiveRecordInterface;
use App\Model\Db\Connection;
use PDO;

class User implements ActiveRecordInterface
{
	private $id;
	private $name;
	private $email;
	private $pass;

	public function getId()
	{
	    return $this->id;
	}

	public function getName()
	{
	    return $this->name;
	}
	
	public function setName(string $name)
	{
	    $this->name = $name;
	    return $this;
	}

	public function getEmail()
	{
	    return $this->email;
	}
	
	public function setEmail(string $email)
	{
	    $this->email = $email;
	    return $this;
	}

	public function getPass()
	{
	    return $this->pass;
	}
	
	public function setPass(string $pass)
	{
	    $this->pass = $pass;
	    return $this;
	}

	public function isNew()
	{
		return !boolval($this->id);
	}

	public function getLastInsertId()
	{
		try {
			$sql = "SELECT MAX(id) as id FROM usuarios";
			$con = Connection::getInstance();
			$con->beginTransaction();
			$stmt = $con->prepare($sql);
			$stmt->execute();
			$id = $stmt->fetch(PDO::FETCH_OBJ);
			$con->commit();
			return $id->id;
		} catch (PDOException $e) {
			$con->rollback();
			return $e->getMessage();
		}
	}

	public function save()
	{
		if ($this->isNew()) {
			$sql = "INSERT INTO usuarios (nome,email,senha) VALUES (:name,:email,:pass)";
		} else {
			$sql = "UPDATE usuarios SET nome=:name,email=:email,senha=:pass WHERE id=:id";
		}
		try {
			$con = Connection::getInstance();
			$con->beginTransaction();
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':name',$this->name);
			$stmt->bindValue(':email',$this->email);
			$stmt->bindValue(':pass',$this->pass);
			if (!$this->isNew()) {
				$stmt->bindValue(':id',$this->id);
			}
			$stmt->execute();
			$con->commit();
			if ($this->isNew()) {
				$this->id = $this->getLastInsertId();
			}
			return $this;
		} catch (PDOException $e) {
			$con->rollback();
			return $e->getMessage();
		}
	}
	public function remove()
	{
		$sql = "DELETE FROM usuarios WHERE id=:id";

		try {
			$con = Connection::getInstance();
			$con->beginTransaction();
			$stmt = $con->prepare($sql);
			$stmt->bindValue(":id",$this->id);
			$return = $stmt->execute();
			$con->commit();
			$this->id = null;
			return $return;			
		} catch (PDOException $e) {
			$con->rollback();
			return $e->getMessage();	
		}
	}
	public static function find(int $id)
	{
		$sql = "SELECT id, nome as name, email, senha as pass FROM usuarios WHERE id=:id";

		try {
			$con = Connection::getInstance();
			$con->beginTransaction();
			$stmt = $con->prepare($sql);
			$stmt->bindValue(":id",$id);
			$stmt->execute();
			$user = $stmt->fetchObject(__CLASS__);
			$con->commit();
			return $user;			
		} catch (PDOException $e) {
			$con->rollback();
			return $e->getMessage();	
		}
	}
	public static function all()
	{
		$sql = "SELECT id, nome as name, email, senha as pass FROM usuarios";

		try {
			$con = Connection::getInstance();
			$con->beginTransaction();
			$stmt = $con->prepare($sql);
			$stmt->execute();
			$users = $stmt->fetchAll(PDO::FETCH_CLASS,__CLASS__);
			$con->commit();
			return $users;			
		} catch (PDOException $e) {
			$con->rollback();
			return $e->getMessage();	
		}
	}
}