<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>HOME</title>
</head>
<body >

<nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">DOCWORLD</a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
              </ul>
            </div>
          </nav>


        <div class="container d-flex justify-content-between align-items-center bg-dark">
          <div class="row ">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <img class="card-img-top" style="width: 500px; height: 400px; box-shadow: 5px 10px #e5e5e5; border-radius: 15px" src="img/card1.jpg" alt="Card image cap">

        <h3 class="card-title">Your Library</h3>
        <p class="card-text">You can view your documents here</p>
        <a href="display.php" class="btn btn-primary">Go to library</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <img class="card-img-top" style="width: 500px; height: 400px; box-shadow: 5px 10px #e5e5e5; border-radius: 15px" src="img/card2.jpg" alt="Card image cap">

        <h3 class="card-title">Add documents</h3>
        <p class="card-text">You can add documents to your library here</p>
        <a href="insert.php" class="btn btn-primary">Upload documents</a>
      </div>
    </div>
  </div>
</div>

</div>


          <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
</body>
</html>