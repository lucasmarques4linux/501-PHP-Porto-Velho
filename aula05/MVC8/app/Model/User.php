<?php 

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence; // base trait
use Sofa\Eloquence\Mappable; 

class User extends Model
{
	use Eloquence, Mappable;

	protected $table = 'usuarios';

	protected $maps = [
        'name' => 'nome'
    ];
}