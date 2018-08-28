<?php 

namespace App\Traits;

trait ConversionTrait
{
	public function toJSON()
	{
		echo "Convertendo para JSON <br>";
	}

	public function toXML()
	{
		echo "Convertendo para XML <br>";
	}
}