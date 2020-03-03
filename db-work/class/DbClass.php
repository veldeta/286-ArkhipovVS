<?php
require_once __DIR__ .  '/vendor/autoload.php';
//require_once  'plugs/PopClass.php';
use App\Plugins\PopClass;
//use Foo\Cat;





class DbClass
{
	public $name;
	public $age;
	public static function insert (array $params, $table)
	{
		$sql = 'UPDATE INTO'.$table;
		foreach($params as $keys => $value)
		{
			$sql .=$keys. '=' .$value;
		}
		return $sql;
	}
}

PopClass::help();
//Cat::Meow();