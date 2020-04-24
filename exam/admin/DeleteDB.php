<?php
session_start();
include("config.php");

$id = $_GET['idt'];
$_SESSION['idt']=$id;

$query="DELETE FROM `test` WHERE id = '$id'";
mysqli_query($link, $query) ;
echo "
  <html>
    <head>
     <meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
    </head>
  </html>"
?>