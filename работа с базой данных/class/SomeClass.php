<?php

spl_autoload_register(function($classname)
{
	$filename = $classname .".php";
	require_once($filename);
});

$obj = new Some();
$obj::work();