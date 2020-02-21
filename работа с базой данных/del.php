<html>
	<head>
		<meta charset="utf-8">
		<title>Delete</title>
	</head>
	<body>
		<form action="del.php" method="POST" >
			<input name="ID" type="number" required />
			<input type="submit" value="Удалить" />
		</form>
	</body>
</html>
<?php
if(isset($_POST['ID']))
{	
	// Переменные с формы
	$ID = $_POST['ID'];
	
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
	if( $mysqli->query("SELECT * FROM ".$db_table." WHERE id = ".$ID.""))
	{
		$result = $mysqli->query("DELETE FROM ".$db_table." WHERE id = ".$ID."");
	}
	else
	{
		echo 'Записи нет';
	}
	if ($result == true)
	{
    	echo "Удаление успешна";
    }
	else
	{
    	echo "Номера такого ID не существует в этой таблице";
    }
}
?>