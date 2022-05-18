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

    $fileextstored = array('doc','txt','pdf');

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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <div class="container" >
      <form class="form" name="docform" method="post" enctype="multipart/form-data" action="#">
        <div>
            <br><h1>Welcome to Docworld</h1><br>
            <h3>Hello <?php echo $_SESSION['user'];                                                                                                                                                    ?></h3>
            <label>File Name :</label><br>
            <input type="text" name="fname" id="fname"><br><br>
            <input  name="file" id="file" type="file"><br>
            <br><button class="btn btn-warning" type="submit" name="save">Upload</button><br>
            <br><button class="btn btn-dark" type="button" name="logout"><a href="logout.php">Log out</a></button>
        </div>
      </form>
  </div>
    
</body>
</html>