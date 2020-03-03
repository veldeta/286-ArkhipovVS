<?php
$arr = range(1,20);
shuffle($arr);

$arr1 = [11, 12, 13, 14, 15, 16, 17, 18, 19, 20, [21, 22, 23, 24, 25, 26, 27, 28, 29, 30]];

$z=18;
$x=0;
foreach($arr as $keys => $value)
{
    if($value == $z)
    {
        echo 'Yes';
    }
	else
	{
		foreach($arr1 as $keys => $value)
		{
			if($value == $z)
			{
				echo 'ДА';
			}
		}
	}
	echo breake;
}	