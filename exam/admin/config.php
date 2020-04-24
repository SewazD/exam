<?php
//Устанавливаем доступы к базе данных:
$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$db_name = 'exam'; //имя базы данных
$link = mysqli_connect($host, $user, $password, $db_name);
//Соединяемся с базой данных используя наши доступы:
mysqli_connect($host, $user, $password, $db_name) or die(mysqli_error($link));












?>