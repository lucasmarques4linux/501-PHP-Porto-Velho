<?php 

namespace App\View;

class View
{
	public function render(string $view,array $data)
	{
		extract($data);

		$file = "src/{$view}.php";

		include $file;

		// if (file_exists($file)) {
		// 	include $file;			
		// } else {
		// 	echo $file;
		// }
	}
}