<?php
 
 if(isset($_REQUEST['submit'])){

include 'conn.php';

 $user = $_REQUEST['user'];
 $pass = $_REQUEST['pass'];
 $cpass = $_REQUEST['cpass'];
 $mobile = $_REQUEST['mobile'];
 $email = $_REQUEST['email'];

 $sql = "INSERT INTO userdetails(user, pass, mobile, email)
  VALUES ('$user', '$pass', '$mobile', '$email')";

  //$q = mysqli_query($con,$sql);

  if($con->query($sql) === TRUE){
      echo "succesfully created";
  }else {
      echo "ERROR ".$sql.'<br>'.$con->error;
  }
  $con->close();

 }

?>