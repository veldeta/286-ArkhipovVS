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




?>

