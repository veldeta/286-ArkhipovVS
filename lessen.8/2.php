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
		<link rel="stylesheet" href="less8.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body background="cells-vertical-horizontal-texture-surface-shape-lines-symmetry-1071889.jpg">
		<div class="row">
			<div class="col-6 col-md-5"></div>
			<div class="col-6 col-md-2">
				<table class="table ">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Name</th>
							<th scope="col">Surname</th>
							<th scope="col">group</th>
						</tr>
					</thead>
					<? while ($value = $result->fetch_assoc()) : ?>
					<tbody>
						<tr>
							<th scope="row"><?= $value['ID']?></th>
							<td> <?= $value['Name']?></td> <td><?= $value['Surname']?></td> <td><?= $value['group']?></td>
						</tr>
					</tbody>
					<? endwhile; ?>
				</table>
				<form action="3.php">
					<input type="submit" value="Назад" class="btn btn-outline-primary btn-lg btn-block" />
				</form>
			</div>
			<div class="col-6 col-md-5"></div>
		</div>
	</body>
</html>
