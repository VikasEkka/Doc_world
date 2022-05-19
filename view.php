<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>LIBRARY</title>
</head>
<body>

<nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="home.php">DOCWORLD</a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
              </ul>
            </div>
          </nav>


                    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</body>
</html>

<?php

include 'conn.php';

$id = $_GET['id'];

$select = "SELECT * FROM `docworld` WHERE id = $id";
$result = $con->query($select);
while($row = $result->fetch_object()){
  $pdf = $row->file;
  $name = $row->fname;
}

echo '<strong>File Name : </strong>'.$name;

// header('Content-type: application/pdf'||'Content-type: text/html'); 
// header('Content-Disposition: inline; filename="' .$pdf. '"'); 
// @readfile($pdf);  
?>
<br/><br/>

<iframe src="<?php echo $pdf; ?>" width="100%" height="500px">
</iframe>

