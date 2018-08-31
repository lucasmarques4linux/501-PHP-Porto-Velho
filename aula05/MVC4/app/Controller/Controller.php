<?php 

namespace App\Controller;

use App\View\View;
use App\Model\User;

class Controller
{
	private $view;

	public function __construct()
	{
		$this->view = new View();
	}

	public function run()
	{
		$users = User::all();
		$this->view->render('list-users',['users' => $users]);
	}
}