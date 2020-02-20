<?php
$db_host = "localhost"; 
$db_user = "root";
$db_password = "";
$db_base = 'world'; 
$db_table = "students"; 
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
$result = mysqli_query($mysqli,"SELECT * FROM students");
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Главная страница</title>
	</head>
	<body>
		<table border="1">
			<tr>
				<td>ID</td> <td>Name</td> <td>Surname</td> <td>Group</td> 
			</tr>
			<? while ($value = $result->fetch_assoc()) : ?>
				<tr>
					<td><?= $value['ID']?></td> <td> <?= $value['Name']?></td> <td><?= $value['Surname']?></td> <td><?= $value['group']?></td>
				</tr>		
			<? endwhile; ?>
		</table>
	</body>
</html>
