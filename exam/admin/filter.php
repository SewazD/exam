<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Админ панель</title>
</head>
<body>
    
<?php
include("config.php");
?>


<style>
body{
    background:#eaeaea url(Img/bgs.png) repeat;
    
}

.nav-link{
    background-color: rgb(230, 230, 250);
    margin-left:1rem;
}

.ct{

  background-color:rgba(130,130,150,0.2);
  text-align:center;
 

}
.title{
    text-align:center;
}
.op{
  opacity: 0.5
}
.op:hover{
  opacity:0.8
}
.sw{
 
}

</style>
</style>
<div class="container ">
<ul class="nav nav-pills">

  <li class="nav-item">
    <a class="nav-link " href="WorkingData.php">Данные по абонентам</a>
  </li>
  
  <li class="nav-item " >
    <a class="nav-link active" href="test2.php"><?php echo'Поиск по датам' ?></a>
  </li>
  <li class="nav-item " >
  <form method="POST">
<div class="row">
<div class="col"><input class="form-control mr-sm-2" type="date" placeholder="Search"   name="date" aria-label="Search"></div>
<div class="col"><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button></div>


</div>


</form>
  </li>
  <li class="nav-item">
    <a class="nav-link back" href="../index.php">Вернуться на стартовую страницу</a>
  </li>
</ul>

</div>


<div class="card ct" style="width: 58rem;    margin-left: 13rem;">
<div class="card-header">
  <h4 class="title">Данные по абонентам</h4></div>

  <div class="card ct" style="width: 58rem;">
  <div class="row">
    <div class="col">Договор №</div>
    <div class="col">ФИО</div>
    <div class="col">Номер</div>
    <div class="col">Тип оплаты</div>
    <div class="col">Дата оплаты</div>
    <div class="col">Задолжность</div>
    
    
    </div>


<?
$date=$_POST['date'];

$id=1;
$sql = mysqli_query($link,"SELECT * FROM test where Payment_Date = '$date'");


while($row=mysqli_fetch_assoc($sql)){
   $_SESSION['bdname']='test';  
   echo'
   <div class="row">
    <div class="col">'.$row["id"].'</div>
    <div class="col">'.$row['User_INFO'].'</div>
    <div class="col">'.$row['Phone'].'</div>
    <div class="col">'.$row['TypePay'].'</div>
    <div class="col">'.$row['Payment_Date'].'</div>
    <div class="col">'.$row['Debts'].'R</div>
    
    
  
   
    
</div>
   
   
    </br>
    
   

    
    
    ';
    $id++;




    
}
?>

</div>



</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</html>
