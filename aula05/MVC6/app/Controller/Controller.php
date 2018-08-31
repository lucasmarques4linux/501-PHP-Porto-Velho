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
		// url/?r=route
		// $r = isset($_GET['r']) ? $_GET['r'] : 'list'
		
		// if(isset($_GET['r'])){
		//    $r = $_GET['r'];
		// } else {
		//	  $r = 'list';
		// }
		
		$r = $_GET['r'] ?? 'list';

		$this->$r();
	}

	public function list()
	{
		$users = User::all();
		$this->view->render('users/list-users',['users' => $users]);
	}

	public function create()
	{
		$this->view->render('users/create');
	}
}