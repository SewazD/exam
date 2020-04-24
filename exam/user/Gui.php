<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href ="admin/config.php">
    <script src="https://kit.fontawesome.com/462c09a8d8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>GUI</title>

</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
         <a href="../index.php" class="navbar-brand" >
         <i style="color:white" class="navbar-brand fas fa-undo"></i>
         </a>
         <button class="navbar-toggler" type="button " data-toggle ="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"aria-expanded="false" aria-label="TogleNavigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="index.php" class="nav-link">Главная</a>
                </li>  
                <li class="nav-item ">
                    <a href="#" class="nav-link">Страница</a>
                </li>  
                <li class="nav-item ">
                    <a href="#" class="nav-link">Страница</a>
                </li>  
                <li class="nav-item ">
                    <a href="#" class="nav-link">Страница</a>
                </li>  
                
            </ul>
            
               
      
         </div>
     </nav> 



     <div class="container">


<h2>Что-то</h2>
<div class="card-deck">

  <?php
  include("../admin/config.php");
  $id=1;
  $sql = mysqli_query($link,"SELECT * FROM test");

  while($row=mysqli_fetch_assoc($sql)){
    $_SESSION['bdname']='test';  



    echo'<div class="card-md" style="width:15rem ;text-align:center"  >
    <img style="width: 60% ;;margin-top:1%;" class="card-img-top" src='.$row['img'].' alt="Card image cap">
    <p class="card-text" " ><smal>Что-то</smal></p>
    
    <div class="card-body">
     <h4 class="card-title ">'.$row['vranch'].'</h4>
      <h6 class="card-text">Что-то : '.$row['textt'].'</h6>
      <h6 class="card-text">Что-то : '.$row['datee'].'</h6>
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Кнопка</button>
    </div>
  </div>';
  $id++;

}
  ?>
</div>

</div>
    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</html>