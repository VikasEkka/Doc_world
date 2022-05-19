<?php
session_start();

if(!$_SESSION['user']){
  echo "you are logged out";
  header('location:home.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>HOME</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
    <div class="sidebar">
         <h1>DocWorld</h1>
         <ul>
             <li><a href="display.php"><i class="fa-thin fa-floppy-disk" aria-hidden="true"></i>YOUR LIBRARY</a></li>
             <li><a href="insert.php"><i class="fa-thin fa-floppy-disk" aria-hidden="true"></i>ADD</a></li>
             <li><a href="logout.php"><i class="fa-regular fa-user-secret"></i></i>Log out</a></li>
         </ul>
         
    </div>
</div>
    <div class="col-lg-6">
        <div class="col-sm-3">
            <div class="card" style="width: 18rem;">
             <img class="card-img-top" style="width: 400px; height: 200px;" src="img/card1.jpg" alt="Card image cap">
                <div class="card-body">
                   <h5 class="card-title">Your Library</h5>
                   <p class="card-text">You can view your documents here</p>
                   <a href="display.php" class="btn btn-primary">open </a>
                </div>
            </div>
             <div class="col-sm-3" style="margin-top: 20px;">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" style="width: 400px; height:200px;" src="img/card2.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">Add documents</h5>
                <p class="card-text">You can add documents here</p>
                <a href="insert.php" class="btn btn-primary">open </a>
            </div>
        </div>
    </div>
      </div>
    </div>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>