<?php
session_start();
include("config.php");


$id = $_GET['idc'];

$Fio = htmlentities($_POST['fio']);
$Phone = htmlentities($_POST['Phone']);






$query="UPDATE `test` SET `User_INFO`='$Fio',`Phone`='$Phone' WHERE id = '$id' ";
mysqli_query($link, $query) ;
echo "
<html>
  <head>
   <meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
  </head>
</html>";
?>