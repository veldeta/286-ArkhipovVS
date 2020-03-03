<?	
$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'world'; // Имя БД
$db_table = "tours"; // Имя Таблицы БД

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
$result = mysqli_query($mysqli,"SELECT * FROM tours");
 
?>
<html>
	<head>
		<meta	charset="utf-8">
		<title>Главная страница</title>
	</head>
	<body>
		<table border="1">
			<tr>
				<td>ID</td> <td>Name</td> <td>desc</td> <td>direction</td> <td>date_begin</td> <td>date_end</td> <td>price</td> <td>photo_url</td>
			</tr>
			<? while ($value = $result->fetch_assoc()) : ?>
				<tr>
					<td><?= $value['ID']?></td> <td> <?= $value['Name']?></td> <td><?= $value['desc']?></td> <td><?= $value['direction']?></td> <td><?= $value['date_begin']?></td> <td><?= $value['date_end']?></td> <td><?= $value['price']?></td>
					<td><img src="<?= $value['photo_url']?>" width=100px  ></td>
				</tr>		
			<? endwhile; ?>
		</table>
		<form action="shape.php">
			<input name="Create" type="submit" value="Создать" action="shape.php" />
		</form>
		<form action="del.php">
			<input name="Delete" type="submit" value="Удалить" action="del.php" />
		</form>
		<form action="change.php">
			<input name="Change" type="submit" value="Изменить" action="change.php" />
		</form>
	</body>
</html>
<?php
/*if($_POST['Create'])
{
	header("Location: shape.php");
}
elseif($_POST['Delete'])
{
	header("Location: del.php");
}
elseif($_POST['Change'])
{
	header("Location: change.php");
}
else
{
	echo "Ошибка";
}*/
?>