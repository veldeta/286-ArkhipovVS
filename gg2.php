<?php


echo $str = "Bereshkov Aндрей Bячеславоич";
echo '<br>';
echo $rest = substr('БережковАндрейВячеслваевич', 0, -36). ' ';
echo $rest = substr('БережковАндрейВячеслваевич', 16, -34). '.';
echo $rest = substr('БережковАндрейВячеслваевич', 28, -22). '.';

$arr = explode(" ", $str);
print_r($arr);
echo  substr($arr[0], 0, 9). ' ';
echo substr($arr[1], 0, 1). '.';
echo substr($arr[2], 0, 1). '.';










?>