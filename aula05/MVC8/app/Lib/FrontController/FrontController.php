<?php 

namespace App\Lib\FrontController;

class FrontController
{
	private $routes;
	private $routeDefault;

	public function setRoutes(array $routes)
	{
		$this->routes = $routes;
	}

	public function setRouteDefault(string $route)
	{
		$this->routeDefault = $route;
	}

	public function run()
	{
		try {			
			$r = $_GET['r'] ?? $this->routeDefault;
			$this->validadeRoute($r);	
		} catch (InvalidRouteException $e) {
			header("HTTP/1.0 404 Not Found");
			echo "Sorry <br>";
			echo "<p>{$e->getMessage()}</p>";
		}
	}

	public function validadeRoute(string $r)
	{
		$r = explode('/', $r);
		$id = null;

		if (isset($r[2]) && is_numeric($r[2])) {
			$id = $r[2];
			$r = $r[0] . '/' . $r[1] . '/{id}';
		} else {
			$r = implode('/', $r);
		}

		if (array_key_exists($r, $this->routes)) {
			$this->parseRoute($this->routes[$r], $id);			
		} else {
			throw new InvalidRouteException("Route {$r} not found!");	
		}
	}

	public function parseRoute(string $route, int $id = null)
	{
		$r = explode('@', $route);
		$controller = $r[0];
		$action = $r[1];

		$this->callController($controller,$action,$id);
	}

	public function callController(string $controller, string $action, int $id = null)
	{
		$controller = new $controller();
		$controller->$action($id);
	}
}