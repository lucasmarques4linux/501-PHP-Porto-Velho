<?php 

require_once 'Model.php';

class Controller
{
	private $model;

	public function __construct()
	{
		$this->model = new Model();
	}

	public function run()
	{
		$msg = $this->model->getData();
		include 'View.php';
	}
}