<?php

namespace Controller;

use Model\Model;
use View\View;

class Controller
{
	private $model;
	private $view;

	public function __construct()
	{
		$this->model = new Model();
		$this->view = new View();
	}

	public function run()
	{
		$msg = $this->model->getData();
		$this->view->render([
			'msg' => $msg,
			'outra' => 'Outra MSG'
			]);
	}
}