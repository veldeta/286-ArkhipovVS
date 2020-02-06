<?php 
//Значение переменой 
$param = 20;    
$param2 = 5;

//Математическое вычесление
$result = $param * $param2;
$result2 = $param / $param2;
$result3 = $param + $param2;
$result4 = $param - $param2;
//Побочный эффект: Вывод на экран 
echo 'Результат умножения ';
echo $result;
echo '<br>'; //Перенос строки
echo 'Результат деления ';
echo $result2;
echo '<br>';
echo 'Результат сложения ';
echo $result3;
echo '<br>';
echo 'Результат вычетания ';
echo $result4;
echo'<br>';	
?>