 <!DOCTYPE HTML>
<html>

	<head>
		<title>lessen8</title>
		<!--------Здесь покдючается JS Boostrap -------------->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<!--------Здесь покдючается CSS -------------->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="less8.css">
	</head>
	
	<body background="Evening_Forests_Mountains_Firewatch_Campo_Santo_549147_1920x1080.jpg"  >
	<? include"class.php" ?>
	
		<div class="row block-top">
			<div class="col-6 col-md-5"></div>
			<div class="col-6 col-md-2">
			<form action="1.php" method="post">
			
				<div class="form-group">
					<label for="exampleInputEmail1">Имя</label>
					<input name="name" type="text" placeholder="Имя" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>
				
				<div class="form-group">
					<label for="exampleInputEmail1">Фамилия</label>
					<input name="Surname" type="text" placeholder="Фамилия" required type="text" placeholder="Имя" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>
				
				<div class="form-group">
					<label for="exampleInputEmail1">Группа</label>
					<input name="group" type="number" placeholder="Группа" required type="text" placeholder="Фамилия" required type="text" placeholder="Имя" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>
				
				<div class="form-group">
					<label for="exampleInputEmail1">Год рождение</label>
					<input name="dob" type="date" placeholder="Год рождение" type="number" placeholder="Группа" required type="text" placeholder="Фамилия" required type="text" placeholder="Имя" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
					<small id="emailHelp" class="form-text text-muted"></small>
				</div>
				
				<input name="dab" type="file" placeholder="файл" class="btn btn-outline-primary" />
				<br>
				<input type="submit" class="btn btn-outline-primary btn-block" />
				<br>
			</form>
			</div>
			<div class="col-6 col-md-5"></div>
		</div>
		
	</body>
</html>