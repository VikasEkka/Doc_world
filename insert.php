<?php
session_start();

if(!$_SESSION['user']){
  echo "you are logged out";
  header('location:login.php');
}
?>

<?php

include 'conn.php';

if(isset($_POST['save'])){

    $fname = $_POST['fname'];
    $files = $_FILES['file'];
    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];

$usercurrent = $_SESSION['user'];

    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('doc','txt','pdf' , 'jpg' , 'png' , 'jpeg' );

    if(in_array($filecheck,$fileextstored)){
        $destinationfile = 'upload/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);


        $q = "INSERT INTO `docworld`(`user`,`fname`, `file`) VALUES ('$usercurrent','$fname','$destinationfile')";

        $query = mysqli_query($con,$q);

    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>UPLOAD</title>
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


          <div class="container" >
      <form class="form" name="docform" method="post" onsubmit="return handlesubmit()" enctype="multipart/form-data" action="#">
        <div class="justify-content-center d-flex align-items-center">
            <h2 class="text-info">Upload Your Document</h2>                                                                                                                                                   
            <label>File Title :</label><br>
            <input type="text" name="fname" id="fname"><br><br>
            <input  name="file" id="file" type="file"><br>
            <br><button class="btn btn-warning" type="submit" name="save">Upload</button><br>
            <br><button class="btn btn-dark" type="button" name="logout"><a href="display.php">Go to library</a></button>
        </div>
      </form>
  </div>
    
</body>
<script>
  function handlesubmit(){
    var fname = document.getElementById('fname').value;
    var file = document.getElementById('file').value;

    if(fname==""){
     alert('file name cannot be blank');
     return false;
    } 
    if(file){
      alert('succesfully uploaded');
    } else {
      alert('please choose a file');
      return false;
    }
    }
  
  </script>


                    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</body>
</html>