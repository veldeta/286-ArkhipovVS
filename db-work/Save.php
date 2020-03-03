<?php
if(isset($_POST['name']) && isset($_POST['desc']) && isset($_POST['direction']) && isset($_POST['date_begin']) && isset($_POST['date_end']) && isset($_POST['price']) && isset($_POST['photo_url']))
{

	
	// Переменные с формы
	$name = $_POST['name'];
	$desc = $_POST['desc'];
	$direction = $_POST['direction'];
	$date_begin = $_POST['date_begin'];
	$date_end = $_POST['date_end'];
	$price = $_POST['price'];
	$photo_url = $_POST['photo_url'];
	
	// Параметры для подключения
	$db_host = "localhost"; 
	$db_user = "root"; // Логин БД
	$db_password = ""; // Пароль БД
	$db_base = 'world'; // Имя БД
	$db_table = "tours"; // Имя Таблицы БД

	// Подключение в базам данных
	$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
	
	// Если есть ошибка соединения, выводим её и убиваем подключение
	if($mysqli->connect_errno)
	{
		printf("Не подключение к базе данных", $mysqli->connect_error);
	}
	$result = $mysqli->query("INSERT INTO ".$db_table."(name,`desc`,direction,date_begin,date_end,price,photo_url) VALUES ('".$name."','".$desc."','".$direction."','".$date_begin."','".$date_end."','".$price."','".$photo_url."')");	
	if ($result == true)
	{
    	//echo "Информация занесена в базу данных";
		header("Location: http://gg/PhP/%d1%80%d0%b0%d0%b1%d0%be%d1%82%d0%b0%20%d1%81%20%d0%b1%d0%b0%d0%b7%d0%be%d0%b9%20%d0%b4%d0%b0%d0%bd%d0%bd%d1%8b%d1%85/%d0%93%d0%bb%d0%b0%d0%b2%d0%b0%d0%bd%d0%b0%d1%8f%20%d1%81%d1%82%d1%80%d0%b0%d0%bd%d0%b8%d1%86%d0%b0.php");
	
    }
	else
	{
    	echo "Информация не занесена в базу данных";
    }
}
?>