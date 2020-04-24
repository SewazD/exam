<?php
session_start();
?>
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
.back{
   margin-left: 25rem;
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


</style>
<div class="container">
<ul class="nav nav-pills">

  <li class="nav-item">
    <a class="nav-link active" href="WorkingData.php?">Данные по абонентам</a>
  </li>
  
  <li class="nav-item " >
    <a class="nav-link" href="filter.php">Поиск по дате</a>
  </li>
  <li class="nav-item">
    <a class="nav-link back" href="../index.php">Вернуться на стартовую страницу</a>
  </li>
</ul>

<br>

<div class="card ct" style="width: 58rem;    margin-left: 3rem;">
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
    
    <div class="col">Действия</div>
    </div>




<?
$id=1;
$sql = mysqli_query($link,"SELECT * FROM test");


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
    
    <div class="col">
    
    <div class="row">
    <div class="col-sm "><a href = "CreateCheck.php?idt='.$row["id"].'" class=" op fas fa-calculator"></a></div>
    <div class="col-sm"><a href="#" style="padding-left=0,1rem" class="fas fa-pen  op " data-toggle="modal" data-target="#exampleModal'.$row["id"].'"> </a>
    
    <div class="  modal fade" id="exampleModal'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel'.$row['id'].'" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Редактировать запись '.$row['id'].'</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container-fluid">
                  <form action="EditDB.php?idc='.$row['id'].'" method="post">
                  
                    <div class="form-froup">
                            <label for="exampleInputTest">ФИО</label>
                            <input name="fio" type="test" class="form-control" id="exampleInputTest" aria-describedby="test" placeholder="'.$row['User_INFO'].'"> <!--Заменить тест на подходящую-->
                          <small id="testlHelp" class=form-text text-muted>Введите ФИО</small>
                    </div>
                    <div class="form-froup">
                            <label for="exampleInputTest2">Телефон</label>
                            <input name="Phone" type="test2" class="form-control" id="exampleInputTest2" aria-describedby="test2" placeholder="'.$row['Phone'].'"> <!--Заменить тест на подходящую-->
                          <small id="test2Help" class=form-text text-muted>Введите  телефон</small>
                    </div>
                   
                    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Добавить</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
       
      </div>
                  </form></div>
      </div>
    
    </div>
  </div>
  </div>
    
    </div>
  
    <div class="col-sm "><a href = "DeleteDB.php?idt='.$row["id"].'" class=" op fas fa-times"></a></div>
    
</div>
    </div>
    </div>
    </br>
    
   

    
    
    ';
    $id++;




    
}
?>



 <div ><button style="width:100%" type="button" class="btn btn-primary  op" data-toggle="modal" data-target="#exampleModal"><i  class="fas fa-plus "></i>  </button></div>

  </div>
  
    
</div>



</div>







<!-- Add -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавление в базу данных</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container-fluid">
                  <form action="AddDB.php" method="post">

                    <div class="form-froup">
                            <label for="exampleInputTest">ФИО</label>
                            <input name="fio" type="test" class="form-control" id="exampleInputTest" aria-describedby="test" placeholder="Введите ФИО"> <!--Заменить тест на подходящую-->
                          <small id="testlHelp" class=form-text text-muted>Введите ФИО</small>
                    </div>
                    <div class="form-froup">
                            <label for="exampleInputTest2">Номер</label>
                            <input name="Phone" type="test2" class="form-control" id="exampleInputTest2" aria-describedby="test2" placeholder="Введите Номер"> <!--Заменить тест на подходящую-->
                          <small id="test2Help" class=form-text text-muted>Введите Номер</small>
                    </div>
                    <div class="form-froup">
                            <label for="exampleInputTest2">Тип оплаты</label>
                            <input name="type" type="test3" class="form-control" id="exampleInputTest3" aria-describedby="test3" placeholder="Введите тип оплаты"> <!--Заменить тест на подходящую-->
                          <small id="test3Help" class=form-text text-muted>Введите тип оплаты</small>
                    </div>
                    <div class="form-froup">
                            <label for="exampleInputTest2">Дата оплаты определяется следующим дне будущего месяца</label>
                            
                    </div>
                    
                    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Добавить</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
       
      </div>
                  </form></div>
      </div>
    
    </div>
  </div>






  
  </div>




</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
