<?php
//1
echo strtoupper('php');
echo '<br>';
//2
echo strtolower('PHP');
echo '<br>';
//3
echo ucfirst(strtolower('london'));
echo '<br>';
//4
echo strtolower('London');
echo '<br>';
//5
echo ucwords('london is the capital of great britain');
echo '<br>';
//6
echo ucfirst(strtolower('LONDON'));
echo '<br>';
echo '<br>';
//7
echo strlen('html css php');
echo '<br>';
//8
$password = 7;
if ($password > 5 & $password < 10)
{
    echo ('верно');
}
else
{
    echo ('Не верно');
}
echo '<br>';
echo '<br>';
//9
echo substr('html css php', 0, 4);
echo '<br>';
//10
echo substr('html css php', 5, 3);
echo '<br>';
//11
echo substr('html css php', 9, 3);
echo '<br>';
//12
echo substr('Good', -3);
echo '<br>';
//13
$str = 'http://kEk/lol/GoOd.com';
if (substr($str, 0, 7) == 'http://')
{
    echo ('Да');
}
else
{
    echo ('Нет');
}
echo '<br>';
//14
$str2 = 'http://kEk/lol/GoOd.com';
if (substr($str2, 0, 7) == 'http://' || substr($str2, 0, 8) == 'https://')
{
    echo ('Да');
}
else
{

}
echo '<br>';
//15
$str3 = 'gg.png';
if (substr($str3, -4) == '.png')
{
    echo ('Да');
}
else
{
    echo ('Нет');
}
echo '<br>';
//16
$str4 = 'gg2.jpg';
if (substr($str4, -4) == '.png' || substr($str4, -4) == '.jpg')
{
    echo ('Yes');
}
else
{
    echo ('No');
}
echo '<br>';
//17
$str5 = 'ijoijiuojoiijooij';
if (strlen($str5) > 5)
{
    echo (substr($str5, 5) . '...');
}
else
{
    echo ($str5);
}
echo '<br>';
echo '<br>';
//18
echo str_replace(['.'], ['-'], '31.12.2012');
echo '<br>';
//19
$str6 = 'abcabcabcabcabc';
echo str_replace(['a', 'b', 'c'], [1, 2, 3], $str6);
echo '<br>';
//20
$str7 = '1a2b3c4b5d6e7f8g9h0';
echo str_replace(['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'], [], $str7);
echo '<br>';
echo '<br>';
//21
$str8 = 'abcabcabcabcabc';
echo strtr('abcabcabcabcabc', 'abc', '123');
echo '<br>';
echo '<br>';
//22
$str9 = '01234';
echo substr_replace($str9, '!!!', 2, 3);
echo '<br>';
echo '<br>';
//23
$str10 = 'abc abc abc';
echo strpos($str10, 'b');
echo '<br>';
//24
echo strrpos('abc abc abc', 'b');
echo '<br>';
//25
echo strpos('abc abc abc', 'b', 3);
echo '<br>';
//26
echo strpos('aaa aaa aaa aaa aaa', ' ', 4);
echo '<br>';
//27
$str11 = 'oahfdv/.svfb.sduhisdfg//vshsd..sdhvys';
if (strpos($str11, '..'))
{
    echo ('есть');
}
else
{
    echo ('нет');
}
echo '<br>';
//28
$str12 = 'http://foihs;rojshdg/g..gmisojiughs;ldjgiorhgs;lg';
if (strpos($str12, 'http://'))
{
    echo ('да');
}
else
{
    echo ('нет');
}
echo '<br>';
echo '<br>';
//29
$str13 = 'html css php';
$arr = explode(' ', $str13);
echo $arr[0] . ' ' . $arr[1] . ' ' . $arr[2];
echo '<br>';
//30
$arr = ['html', 'css', 'php'];
$str = implode(' ', $arr);
echo $str;
echo '<br>';
//31
$date = '2013-12-31';
$arr = explode('-', $date);
echo $arr[2] . '.' . $arr[1] . '.' . $arr[0];
echo '<br>';
echo '<br>';
//32
$str14 = '1234567890';
$arr = str_split($str14, 2);
var_dump($arr);
echo '<br>';
echo '<br>';
//33
$str15 = '1234567890';
$arr = str_split($str15, 1);
var_dump($arr);
echo '<br>';
//34
$str16 = '1234567890';
echo implode('-', str_split($str16, 2));
echo '<br>';
echo '<br>';
//35
var_dump(trim(' hello '));
echo '<br>';
//36
echo trim('/php/', '/');
echo '<br>';
//37
echo trim('слова слова слова.', '.');
echo '<br>';
echo '<br>';
//38
echo strrev('12345');
echo '<br>';
//39
$str17 = 'madam';
if (strrev($str17) == $str17)
{
    echo ('да');
}
else
{
    echo 'нет';
}
echo '<br>';
//40
echo str_shuffle('abcabcabcabcabc');
echo '<br>';
//41
$str18 = 'abcdefghijklmnopqrstuvwxyz';
echo substr(str_shuffle($str18) , 0, 6);
echo '<br>';
//42
echo number_format(12345678);
echo '<br>';
//43
$str19 = 'x';
for ($i = 1;$i <= 9;$i++)
{
    echo str_repeat($str19, $i);
    echo '<br>';
}
echo '<br>';
//44
$x = 1;
for ($i = 1;$i < 10;$i++)
{
    echo str_repeat($x, $i);
    echo '<br>';
    $x++;
}
echo '<br>';
//45
echo strip_tags('html, <b>php</b>, js');
echo '<br>';
//46
$str20 = '<b>GG.com</b> <i>12783</i> <br>';
echo strip_tags(($str20) , '<b>, <i>');
echo '<br>';
//47
$str21 = 'html, <b>php</b>, js';
echo htmlspecialchars($str21);
echo '<br>';
//48
echo ord(' ');
echo '<br>';
echo ord('a');
echo '<br>';
echo ord('b');
echo '<br>';
echo ord('c');
echo '<br>';
//49
echo chr(33);
echo '<br>';
//50
$str22 = '&#71&#79&#79&#68';
echo ($str22);
echo '<br>';
//51
for ($len = 0;$len <= 6;$len++)
{
    $str23 = chr(rand(97, 122));
    echo $str23;
}
echo '<br>';
//52
$latterr = 'M';
$code = ord($latterr);
//53
if ($code >= 65 & $code <= 90)
{
    echo 'Большая буква';
}
else
{
    echo 'Маленькая буква';
}
echo '<br>';
//54
$str24 = 'ab-cd-ef';
echo strchr($str24, '-');
echo '<br>';
//55
$str25 = 'ab-cd-ef';
echo strchr($str25, '-e');
echo '<br>';
//56
$str26 = 'ab--cd--ef';
echo strstr($str26, '-');
echo '<br>';
//57
$str27 = 'var_test_text';
echo str_replace('_', '', $str27);
?>