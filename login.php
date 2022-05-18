<?php
session_start();
?>

<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
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
             header('location:insert.php');
         } else {
             echo "password incorrect";
         }
     } else {
         echo "invalid" ;
     }
}
?>

    <div class="container"><br />
        <h1 class="text-primary text-center">Welcome to DOCWORLD</h1><br />
        <div class="col-lg-8 m-auto d-block" >
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
</body>

</html>