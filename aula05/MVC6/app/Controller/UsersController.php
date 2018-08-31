<?php 

namespace App\Controller;

use App\Model\User;

class UsersController extends Controller
{
	public function list()
	{
		$users = User::all();
		$this->view->render("users/list", ["users" => $users]);
	}
}