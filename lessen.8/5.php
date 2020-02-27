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
		<title>Кружки</title>
		<!--------Здесь покдючается JS Boostrap -------------->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<!--------Здесь покдючается CSS -------------->
		<link rel="stylesheet" href="less8.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body background="cells-vertical-horizontal-texture-surface-shape-lines-symmetry-1071889.jpg">
		<?= include"class.php" ?>
		<div class="container">
		<div class="row">
			<div class="col-6 col-md-2 offset-md-5">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">ID</th>
							<th scope="col">Name</th>
						</tr>
					</thead>
					<? while ($value = $result->fetch_assoc()) : ?>
					<tbody>
						<tr>
							<th scope="row"><?= $value['ID']?></th>
							<td> <?= $value['Name']?></td> 
						</tr>	
					</tbody>
					<? endwhile; ?>
				</table>
				<form action="3.php">
					<input type="submit" value="Назад" class="btn btn-outline-primary btn-block" />
				</form>	
			</div>
			<div class="col-6 col-md-5"></div>
		</div>
		</div>
	</body>
</html>

