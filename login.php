<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Login</title>
</head>
<body>

<?php

include 'conn.php';

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $usearch = "SELECT * from userdetails  where user='$user'";
     $query = mysqli_query($con,$usearch);
    
     $user_count = mysqli_num_rows($query);

     if($user_count){
         $user_pass = mysqli_fetch_assoc($query);
         $dbpass = $user_pass['pass'];
         $_SESSION['user'] = $user_pass['user'];

        //  $pass_check = password_verify($pass,$dbpass);

         if($pass===$dbpass){
             echo "login successful";
             header('location:home.php');
         } else {
             echo "password incorrect";
         }
     } else {
         echo "invalid" ;
     }
}
?>


<nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="index.php">DOCWORLD</a>
              </div>
              <ul class="nav navbar-nav navbar-right">
              <li><a href="regis.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>              </ul>
            </div>
          </nav>


          <div class="container"><br />

        <div class="col-lg-4 m-auto d-block" >
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" onsubmit="return validation()" class="bg-light" method='POST'>
                <div class="form-group">
                    <label>Username :</label>
                    <input type="text" name="user" class="form-control" id="user" />
                </div>
                <span id="username" class="text-danger font-weight-bold"></span>

                <div class="form-group">
                    <label>Password :</label>
                    <input type="password" name="pass" class="form-control" id="pass" />
                </div>
                <span id="passwords" class="text-danger font-weight-bold"></span>


                <button type="submit" name="submit" value="submit" class="btn btn-primary">Log In</button> 
                <p class="text-info">Don't have account ? You can signup here : </p>
                <button type="button" class="btn btn-warning"><a href="regis.php" >Create account</a></button>   
            </form>
        </div>
    </div>

    <script  >
        
        function validation(){
            var user = document.getElementById('user').value;
            var pass = document.getElementById('pass').value;

            if(user == ""){
                document.getElementById('username').innerHTML="**please fill the username field" ;
                return false;
            } else {
                document.getElementById('username').innerHTML="" ;

            }
            if((user.length<=2)||(user.length>20)){
                document.getElementById('username').innerHTML="**user length must be between 2 and 20" ;
                return false;
            }
            if(!isNaN(user)){
                document.getElementById('username').innerHTML="**username cannot be a number" ;
                return false;
            }



            if(pass == ""){
                document.getElementById('passwords').innerHTML="**please fill the password" ;
                return false;
            } else {
                document.getElementById('passwords').innerHTML="" ;

            }
            if((pass.length<=8)||(pass.length>20)){
                document.getElementById('passwords').innerHTML="**password length must be between 8 and 20" ;
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