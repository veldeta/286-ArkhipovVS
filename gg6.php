<?php
echo '<ol>';
$arr =[1,2,3,[22,33],4,5,6];
foreach($arr as $x)
{
	echo '<li>';
	if ($x == is_array($x))
	{
		echo'<ol>';
		foreach($x as $z)
		{
			echo'<li>';
			Print($z);
			echo'</li>';
		}
		echo'</ol>';
	}
	else 
	{
		print($x);
	}
	echo '</li>';
}
echo '</ol>';
?>