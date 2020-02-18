<?php 
$localhost = 'localhost';
$my_user ='root';
$my_password = '';
$world = 'world';

if($_POST['my_user'] == 'root')
{
	header("Location: Save.php");
}
else
{
	echo "Ошибка";
}

?>