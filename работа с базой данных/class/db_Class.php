<?php
namespace says;
require_once __DIR__ . '/vendor/autoload.php';
use App\Plugins\PopClass;







class db_Class
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

PopClass::sos();