<?php

$host = 'localhost'; //имя хоста, на локальном компьютере это localhost
$user = 'root'; //имя пользователя, по умолчанию это root
$password = ''; //пароль, по умолчанию пустой
$link = mysqli_connect($host, $user, $password);
mysqli_connect($host, $user, $password) or die(mysqli_error($link));
$sql = 'CREATE DATABASE exam';
mysqli_query($link,$sql);

$sql = "CREATE TABLE exam.test (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    User_INFO text NOT NULL,
    Phone text NOT NULL,
    TypePay text NOT NULL,
    Payment_Date date  NOT NULL,
    Debts text NOT NULL
    )";

mysqli_query($link,$sql);
$db_name='exam';
$link= mysqli_connect($host, $user, $password, $db_name);

$sql="INSERT INTO `test` (`id`, `User_INFO`, `Phone`, `TypePay`, `Payment_Date`, `Debts`) VALUES (NULL, 'Иванов Иван Иванович', '8239291923231', 'Повременная', '2020-04-30', '300');";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
$sql="INSERT INTO `test` (`id`, `User_INFO`, `Phone`, `TypePay`, `Payment_Date`, `Debts`) VALUES (NULL, 'Уткин Антон Федорович', '8239291923231', 'Абонентская', '2020-04-21', '300');";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
$sql="INSERT INTO `test` (`id`, `User_INFO`, `Phone`, `TypePay`, `Payment_Date`, `Debts`) VALUES (NULL, 'Кубик Андрей Сергеевич', '8239291923231', 'Абонентская', '2020-04-21', '300');";
$result = mysqli_query($link, $sql) or die(mysqli_error($link));

echo "
<html>
  <head>
   <meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
   <script>alert(\"База данных сгенерирована и заполнена,производится возврат на стартовый экран\") </script>
  </head>
</html>";
?>

