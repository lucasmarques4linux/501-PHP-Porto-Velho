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

	public function create()
	{
		$user = new User();
		$user->name = $_POST['name'];
		$user->email = $_POST['email'];
		$user->pass = $_POST['pass'];
		$user->save();
		header('location:?r=users');
	}

	public function edit(int $id)
	{
		$user = User::find($id);
		$this->view->render('users/edit',['user' => $user]);
	}	

	public function update(int $id)
	{
		$user = User::find($id);
		$user->name = $_POST['name'];
		$user->email = $_POST['email'];
		$user->save();
		header('location:?r=users');
	}

	public function delete(int $id)
	{
		$user = User::find($id);
		$user->remove();
		header('location:?r=users');
	}
}