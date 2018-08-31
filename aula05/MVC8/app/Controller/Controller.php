<?php 

namespace App\Controller;

use App\View\View;

abstract class Controller
{
	protected $view;

	public function __construct()
	{
		$this->view = new View();
	}
}