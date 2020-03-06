<?php
function pup($tree)
{
	$markup = '';
	foreach($tree as $keys => $twig)
	{
		$markup .= '<li>' .((is_array($twig)) ? $keys. pup($twig): $twig) . '</li>';
	}
	return '<ul>' .$markup. '</ul>';
}
$tree = array(
	'test0',
	'test1' => array(
		'test1.1',
		'test1.2' => array(
			'test1.2.1'
		)
	),
	'test3'
);
echo pup($tree);
