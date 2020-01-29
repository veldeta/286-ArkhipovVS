<?php
echo strtoupper('php'); echo '<br>';
echo strtolower('PHP'); echo '<br>';
echo ucfirst(strtolower('london')); echo '<br>';
echo strtolower('London'); echo '<br>';
echo ucwords('london is the capital of great britain'); echo '<br>';
echo ucfirst(strtolower('LONDON')); echo '<br>';echo '<br>';
echo strlen ('html css php'); echo '<br>';

$password = 7;
if($password>5 & $password<10){
 echo('верно');
}
else
{
	echo('Не верно');
}
echo '<br>';echo '<br>';
echo substr('html css php', 0,4); echo '<br>';
echo substr('html css php', 5, 3);echo '<br>';
echo substr('html css php',9, 3); echo '<br>';
echo substr('Good', -3); echo '<br>';

$str ='http://kEk/lol/GoOd.com';
if (substr($str, 0, 7) == 'http://')	
{
	echo('Да');
}
else
{
	echo('Нет');
}
echo '<br>';

$str2 = 'http://kEk/lol/GoOd.com';
if (substr($str2, 0, 7) == 'http://' || substr($str2, 0, 8) =='https://')
	{
		echo ('Да');
	}

	else {
		
	}
  
echo '<br>';

$str3 = 'gg.png';
if (substr($str3, -4) == '.png'){
	echo ('Да');
}
else{
	echo ('Нет');
}
 echo '<br>';
 
$str4 = 'gg2.jpg';
if (substr($str4,-4)== '.png' || substr($str4, -4) == '.jpg'){
	echo('Yes');
}
	else{
		echo('No');
	}
 echo '<br>';
 
 $str5 = 'ijoijiuojoiijooij';
 if(strlen($str5)>5){
	 echo(substr($str5, 5). '...');
 }
 else{
	 echo($str5);
 }
echo'<br>';
echo'<br>';

echo str_replace(['.'],['-'], '31.12.2012');
echo'<br>';

$str6 = 'abcabcabcabcabc';
echo str_replace(['a','b','c'],[1,2,3], $str6);echo'<br>';

$str7 = '1a2b3c4b5d6e7f8g9h0';
echo str_replace(['1','2','3','4','5','6','7','8','9','0'],[], $str7);
echo'<br>';
echo'<br>';

$str8 = 'abcabcabcabcabc';
echo strtr('abcabcabcabcabc', 'abc', '123');
echo'<br>';
echo'<br>';

$str9 ='01234';
echo substr_replace($str9, '!!!', 2, 3);
echo'<br>';echo'<br>';

$str10 = 'abc abc abc';
echo strpos($str10, 'b');
echo'<br>';

echo strrpos('abc abc abc', 'b');
echo'<br>';

echo strpos('abc abc abc', 'b', 3);
echo'<br>'; 

echo strpos('aaa aaa aaa aaa aaa', ' ', 4); 
echo'<br>';

$str11 = 'oahfdv/.svfb.sduhisdfg//vshsd..sdhvys';
if(strpos($str11,'..'))
{
	echo('есть');
}
else{
	echo('нет');
}
echo'<br>';

$str12 = 'http://foihs;rojshdg/g..gmisojiughs;ldjgiorhgs;lg';
if(strpos($str12, 'http://'))
{
	echo ('да');
}
else{
	echo ('нет');
}
echo'<br>';echo'<br>';

$str13 = 'html css php';
$arr = explode(' ', $str13);
echo $arr[0]. ' ' .$arr [1].' ' .$arr[2];
echo'<br>';

$arr = ['html','css','php'];
$str = implode(' ', $arr);
echo $str;
echo'<br>';

$date = '2013-12-31';
$arr = explode('-', $date);
echo $arr[2]. '.'.$arr[1]. '.'.$arr[0]; 
echo'<br>';echo'<br>';
$str14 = '1234567890';
$arr = str_split($str14, 2);
var_dump($arr);
echo'<br>';echo'<br>';

$str15 = '1234567890';
$arr = str_split($str15, 1);
var_dump($arr);
echo'<br>';

$str16 = '1234567890';
echo implode('-', str_split($str16, 2));
echo'<br>';echo'<br>';

var_dump(trim(' hello '));
echo'<br>';

echo trim('/php/', '/');
echo'<br>';

echo trim('слова слова слова.', '.');
echo'<br>';
echo'<br>';

echo strrev('12345');
echo'<br>';

$str17 = 'madam';
if(strrev($str17) == $str17){
	echo('да');
}
else{
	echo'нет';
}
echo '<br>';

echo str_shuffle('abcabcabcabcabc');
echo '<br>';

$str18 = 'abcdefghijklmnopqrstuvwxyz';
echo  substr(str_shuffle($str18), 0, 6);
echo '<br>';

echo number_format(12345678);
echo '<br>';


$str19 = 'x';
for($i=1; $i<=9; $i++){
	echo str_repeat($str19, $i);
	echo '<br>';
}
echo '<br>';

$x = 1;
for($i=1; $i<10; $i++){
	echo str_repeat($x, $i);
	echo'<br>';
	$x++;
}
echo '<br>';


echo strip_tags('html, <b>php</b>, js');
echo'<br>';

$str20 = '<b>GG.com</b> <i>12783</i> <br>';
echo strip_tags(($str20), '<b>, <i>');
echo'<br>';

$str21 = 'html, <b>php</b>, js';
echo htmlspecialchars($str21);
echo '<br>';

echo ord(' ');echo'<br>';
echo ord('a');echo'<br>';
echo ord('b');echo'<br>';
echo ord('c');
echo'<br>';

echo chr(33);
echo '<br>';

$str22 = '&#71&#79&#79&#68';
echo($str22);
echo '<br>';

for ($len=0; $len <=6 ; $len++) { 
$str30 = chr(rand(97,122)); 
echo $str30; 
}
echo '<br>';



?>