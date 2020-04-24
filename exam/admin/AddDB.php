<?php
session_start();
include("config.php");

$Fio = htmlentities($_POST['fio']);
$Phone = htmlentities($_POST['Phone']);
$Type =htmlentities($_POST['type']);
$timezone = date_default_timezone_get();
$date = date('d.m.Y', time());
$date1 = date('d.m.Y', strtotime($Date. ' + 32 days'));
$zad = 0;
$query="INSERT INTO `test` (`id`, `User_INFO`, `Phone`, `TypePay`, `Payment_Date`, `Debts`) VALUES (NULL, '$Fio', '$Phone', '$Type', '$date1', '$zad')";
mysqli_query($link, $query) ;
echo "
  <html>
    <head>
     <meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
    </head>
  </html>";
?>