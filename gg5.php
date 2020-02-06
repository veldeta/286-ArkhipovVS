<?php
//1
$arr = ['1','2','3','4'];
echo count($arr);
echo '<br>';
//2
$arr2 = ['a','b','c','d','e'];
echo count($arr2);
echo '<br>';
//3
$arr3 = [1,2,3,4,5,6,7];
var_dump(in_array(3, $arr3));
echo '<br>';
//4
$arr4 = [1,2,3,4,5];
echo array_sum($arr4);
echo '<br>';
//5
$arr5 = [1,2,3,4,5];
echo array_product($arr5);
echo'<br>';
//6
function pop($arr6){
	$sum = array_sum($arr6)/count($arr6);
	return $sum;
}
echo pop([1,2,3,4,5]);
echo'<br>';
echo'<br>';
//7
$arr7 = range (1,100);
var_dump($arr7);
echo'<br>';
//8
$arr8 = range('a','z');
var_dump($arr8);
echo '<br>';
//9
$arr9 = range(1,9);
$str = implode ('-', $arr9);
echo $str;
echo'<br>';
//10
$arr10 = range(1, 100);
echo array_sum ($arr10);
echo'<br>';
//11
$arr11 = range(1,10);
echo array_product($arr11);
echo'<br>';
//12
$arr121 = [1,2,3];
$arr122 = ['a','b','c'];
$arr12 = array_merge($arr121, $arr122);
var_dump($arr12);
echo'<br>';
//13
$arr13 = [1,2,3,4,5];
$result = array_slice($arr13, 1, 3);
var_dump($result);
echo '<br>';
//14
$arr14 = [1,2,3,4,5];
var_dump(array_splice($arr14, 1, -2));
echo '<br>';
//15
$arr15 = [1,2,3,4,5];
var_dump(array_splice($arr15, 0, -1));
echo'<br>';
//16
$arr16 = [1,2,3,4,5];
var_dump(array_splice($arr16, 3, 0, ['a','b','c']));
echo'<br>';
//17
/*$arr17 = [1,2,3,4,5];
var_dump(array_splice($arr17, 1, 0, .['a','b']. 4 .['c']. 5, ['e']));*/
//18
$arr18 = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = array_keys($arr18);
$values = array_values($arr18);
var_dump ($keys);
var_dump ($values);
echo'<br>';
//19
$arr191 = array('a','b','c');
$arr192 = array(1,2,3);
var_dump(array_combine($arr191, $arr192));
echo'<br>';
//20
$arr20 = array('a'=>1, 'b'=>2, 'c'=>3);
var_dump(array_flip($arr20));
echo '<br>';
//21
$arr21 = array(1,2,3,4,5);
var_dump(array_reverse($arr21));
echo '<br>';
//22
$arr22 = ['a', '-', 'b', '-', 'c', '-', 'd'];
echo array_search('-', $arr22);
echo'<br>';
//23
$var = array_search('-', $arr22);
array_splice($arr22, $var, 1);
var_dump($arr22);
echo'<br>';
//24
$arr24 = ['a', 'b', 'c', 'd', 'e'];
var_dump(array_replace($arr24, [0=>'!',3=>'!!']));
echo'<br>';
//25
$arr25 = array('3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b');
sort($arr25);
var_dump($arr25);
echo'<br>';
//26
$arr26 = ['a'=>1, 'b'=>2, 'c'=>3];
var_dump(array_rand($arr26));
echo '<br>';
//27
$key = array_rand($arr26);
var_dump($arr26[$key]);
echo'<br>';
//28
shuffle($arr24);
var_dump($arr24);
echo'<br>';
//29
$arr29 = range(1,25);
shuffle($arr29);
var_dump($arr29);
echo'<br>';
//30
$arr30 = range('a','z');
shuffle($arr30);
var_dump($arr30);
echo'<br>';
//31
$arr31 = range('a', 'z');
shuffle($arr31);
$z = implode($arr31);
$x = substr($z, 0, 6);
echo $x;
echo'<br>';
//32
$arr32 = [ 'a', 'b', 'c', 'b', 'a'];
var_dump(array_unique($arr32));
echo'<br>';
//33
$arr33 = [1,2,3,4,5];
array_shift($arr33);
array_pop($arr33);
var_dump($arr33);
echo'<br>';
//34
$arr34 = [1,2,3,4,5];
array_unshift($arr34, 0);
array_push($arr34, 6);
var_dump($arr34);
echo'<br>';
//35
$arr35 = [1,2,3,4,5,6,7,8];
$pop = ' ';	

	for($i=0; $i<4; $i++)
	{
		$pop .= array_shift($arr35);
		$pop .= array_pop($arr35);
	}
echo $pop;
	$ar = [1, 2, 3, 4, 5, 6, 7, 8];
echo'<br>';
	$str = '';
	while (count($ar) > 0) {
		$str  .=  array_shift($ar);
		$str .= array_pop($ar);
	}

	echo $str;
?>

