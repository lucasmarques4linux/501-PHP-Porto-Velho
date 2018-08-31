<?php 

namespace App\Controller;

use App\Model\User;

class UsersController extends Controller
{
	public function index()
	{
		$users = User::all();
		$this->view->render("users/index", ["users" => $users]);
	}

	public function new()
	{
		$this->view->render('users/new');
	}

	public function edit(int $id)
	{

	}	

	public function update(int $id)
	{

	}

	public function delete(int $id)
	{

	}
}