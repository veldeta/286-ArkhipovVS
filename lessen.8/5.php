<?php
$db_host = "localhost"; 
$db_user = "root";
$db_password = "";
$db_base = 'world'; 
$db_table = "circle"; 

$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
$result = mysqli_query($mysqli,"SELECT * FROM circle");
?>
<html>
	<head>
		<meta	charset="utf-8">
		<title>Главная страница</title>
	</head>
	<body>
		<table border="1">
			<tr>
				<td>ID</td> <td>Name</td>
			</tr>
			<? while ($value = $result->fetch_assoc()) : ?>
				<tr>
					<td><?= $value['ID']?></td> <td> <?= $value['Name']?></td> 
				</tr>		
			<? endwhile; ?>
		</table>
	</body>
</html>

