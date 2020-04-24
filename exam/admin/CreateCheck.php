<?php
session_start();
include("config.php");

$id = $_GET['idt'];
$_SESSION['idt']=$id;


$sql = mysqli_query($link,"SELECT * FROM test where id='$id'");


while($row=mysqli_fetch_assoc($sql)){
   $_SESSION['bdname']='test';  
$it = $row['Debts'];
$it=$it*2;

echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/462c09a8d8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Админ панель</title>
</head>
<body>
<style>
.o{
  margin-left:35rem;
  text-align:center;
}

</style>

<div class="card o" style="width: 20rem;">

<div class="card-body">
  <h3 class="card-title">Платежка для '.$row['User_INFO'].' </h3>
  <p class="card-text">По вашу номеру договора №'.$row['id'].' выставлен счет на сумму '.$row['Debts'].' Рублей.</p>
  <p class="card-text">Вам необходимо оплатить предостовляемые вам услуги до '.$row['Payment_Date'].'.</p>
  <p class="card-text">Так же у вас имеется просрочка по оплате на сумму '.$row['Debts'].'Рублей.</p>
  <p class="card-text">Итого вам необходимо оплатить : '.$it.'Рублей.</p>
  <a href="WorkingData.php" class="btn btn-primary">Отправить платежку</a>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>


';

}
?>



