<! DOCTYPE html>
<html>
	<head>
		<title>Меню</title>
		
		<!--------Здесь покдючается JS Boostrap -------------->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<!--------Здесь покдючается CSS -------------->
		<link rel="stylesheet" href="less8.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body background="Evening_Forests_Mountains_Firewatch_Campo_Santo_549147_1920x1080.jpg" >
		<? include"class.php" ?>
		<div class="row block-center" align="center">
			<div class="col-6 col-md-5"></div>
			<div class="col-6 col-md-2">
				<form action="2.php">
					<input type="submit" value="Таблица студентов"  class="btn btn-primary" />
				</form>
				<form action="4.php">
					<input type="submit" value="Информация о нас" class="btn btn-success" />
				</form>
				<form action="5.php">
					<input type="submit" value="Кружки" class="btn btn-info" />
				</form>
				<form action="https://dead142.github.io/design/">
					<input type="submit" value="Задание МДК" class="btn btn-danger" />
					<br>
					<br>
				</form>
				<form action="index.php">
					<input type="submit" value="Назад" class="btn btn-info" />
				</form>
			</div>
			<div class="col-6 col-md-5"></div>
		</div>
	</body>
</html>