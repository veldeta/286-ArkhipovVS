<?php
// Переменные с формой
$name = $_POST['name'];
$text = $_POST['text'];

// Параметры для подключения
$db_host = "localhost"; 
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'world'; // Имя БД
$db_table = "mytable"; // Имя Таблицы БД

// Подключение к базе данных
$mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) 
{
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>