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

    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('doc','txt','pdf' , 'jpg' , 'png' , 'jpeg' );

    if(in_array($filecheck,$fileextstored)){
        $destinationfile = 'upload/'.$filename;
        move_uploaded_file($filetmp,$destinationfile);

        $q = "INSERT INTO `docworld`(`fname`, `file`) VALUES ('$filename','$destinationfile')";

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
    <title>Docworld</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
  />

</head>
<body>
  <div class="container-fluid" >
      <form class="form" name="docform" method="post" onsubmit="return handlesubmit()" enctype="multipart/form-data" action="#">
        <div>
            <br><h1 class="bg-dark text-primary text-center">Welcome to Docworld</h1><br>
            <h3 class="text-info">Hello <?php echo $_SESSION['user'] ;?> upload your file</h3>                                                                                                                                                   ?></h3>
            <label>File Name :</label><br>
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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</html>