<?php
 
 if(isset($_REQUEST['submit'])){

include 'conn.php';

 $user = $_REQUEST['user'];
 $pass = $_REQUEST['pass'];
 $cpass = $_REQUEST['cpass'];
 $mobile = $_REQUEST['mobile'];
 $email = $_REQUEST['email'];

//  $id = $_GET['id'];

 $sql = "INSERT INTO userdetails(user, pass, mobile, email)
  VALUES ('$user', '$pass', '$mobile', '$email')";

  // $sql2 = "INSERT INTO `docworld`(`user_id`) VALUES ('$id')";

  //$q = mysqli_query($con,$sql);

  if($con->query($sql) === TRUE){
    header('location:login.php');
  } else {
      echo "ERROR ".$sql.'<br>'.$con->error;
  }
  $con->close();

 }

?>