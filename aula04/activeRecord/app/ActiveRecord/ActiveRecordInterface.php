<?php 

namespace App\ActiveRecord;

interface ActiveRecordInterface
{
	public function save();
	public function remove();
	public function getLastInsertId();
	public function isNew();
	public static function find(int $id);
	public static function all();
}