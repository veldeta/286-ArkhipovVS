<html>
	<head>
		<title>Форма</title>
	</head>
	<body>
		<form action = "Save.php" method = "POST" >
			<input type="varchar" name="name" placeholder="Название тура" required />
			<br>
			<input type="text" name="desc" placeholder="Описание тура" required />
			<br>
			<input name="direction" type="text" placeholder="Направление тура" required />
			<br>
			<input name="date_begin" type="date" placeholder="Дата начала тура" required />
			<br>
			<input name="date_end" type="date" placeholder="Дата окончания тура" required />
			<br>
			<input name="price" type="number" placeholder="Цена тура(p.)" required />
			<br>
			<input name="photo_url" type="file" placeholder="Путь к картинке тура"  />
			<br>
			<br>
			<input type="submit" value="Отправить" />
		</form>
	</body>
</html>
