<?php 

namespace App\Lib\FrontController;

class FrontController
{
	public function run()
	{
		$r = $_GET['r'] ?? 'home/index';

		$r = explode('/', $r);
		$controller = $r[0];
		$action = $r[1] ?? 'index';
		$id = $r[2] ?? null;

		$controller = "App\Controller\\" . ucfirst(strtolower($controller)) . "Controller";
		$action = strtolower($action);

		$controller = new $controller();
		$controller->$action($id);
	}
	public function validadeRoute(){}
	public function callController(){}
}