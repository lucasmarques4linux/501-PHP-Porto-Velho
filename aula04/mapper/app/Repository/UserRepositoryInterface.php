<?php 

namespace App\Repository;

use App\Entity\User;

interface UserRepositoryInterface
{
	public function findAll();

	public function findById(int $id);

	public function create(User $user);

	public function update(User $user);

	public function remove(User $user);
}