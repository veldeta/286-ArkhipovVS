<?php
namespace App\Plugins;
class PopClass
{
	public $pop =1;
	public static function sos()
	{
		echo 'HELP';
	}
}
$obj = new PopClass();
$obj->sos();