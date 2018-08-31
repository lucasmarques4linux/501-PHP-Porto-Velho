<?php 

// Model
// View
// Controller

class Model
{
	public function getData()
	{
		return 'Olá MVC1';
	}
}

class View
{
	public function render(string $data)
	{
		echo "<h1>{$data}</h1>";
	}
}

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
		$dados = $this->model->getData();
		$this->view->render($dados);
	}
}

(new Controller())->run();