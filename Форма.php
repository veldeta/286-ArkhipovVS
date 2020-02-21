<html>
	<head>
		<title>Форма</title>
	</head>
	<body>
		<?php
		print "<form action = \"Запрос.php \" method=POST>";
		print "Ведите логин <input type=\"text\" name=\"my_user\" >";
		print "Пароль <input type=\"password\"name=\"password\" >";
		print "<input type=\"submit\" value=\"Вести\" >";
		print "</form>";
		?>
	</body>
</html>
