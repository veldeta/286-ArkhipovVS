<?php
$mysqli = new mysqli("localhost", "root", "", "world");

if($mysqli->connect_errno)
{
	printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
	exit();
}
if($mysqli->query("CREATE TEMPORARY TABLE myCity LIKE City") === TRUE)
{
	printf("Таблица myCity успешно создана.\n");
}
if($result = $mysqli->query("SELECT Name FROM City LIMIT 10"))
{
    printf("Select вернул %d строк.\n", $result->num_rows);
    /* очищаем результирующий набор */
    $result->close();
}
?>