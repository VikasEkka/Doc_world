<html>

<head>
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container"><br />
        <h1 class="text-primary text-center">Welcome to DOCWORLD</h1><br />
        <div class="col-lg-8 m-auto d-block" >
            <form action="regis_nxt.php" onsubmit="return validation()" class="bg-light" method='POST'>
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


                <div class="form-group">
                    <label>confirm Password :</label>
                    <input type="text" name="cpass" class="form-control" id="cpass" />
                </div>
                <span id="cpasswords" class="text-danger font-weight-bold"></span>


                <div class="form-group">
                    <label>Mobile Number :</label>
                    <input type="text" name="mobile" class="form-control" id="mobile" />
                </div>
                <span id="mnumber" class="text-danger font-weight-bold"></span>


                <div class="form-group">
                    <label>Email address :</label>
                    <input type="text" name="email" class="form-control" id="email" />
                </div>
                <span id="emailid" class="text-danger font-weight-bold"></span>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Create</button> 
                <p class="text-info">Have an account ? </p>
                <button type="button" class="btn btn-warning"><a href="login.php" >Log In</a></button>   
            </form>
        </div>
    </div>

    <script  >
        
        function validation(){
            var user = document.getElementById('user').value;
            var pass = document.getElementById('pass').value;
            var cpass = document.getElementById('cpass').value;
            var mobile = document.getElementById('mobile').value;
            var email = document.getElementById('email').value;

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




            if(cpass == ""){
                document.getElementById('cpasswords').innerHTML="**please confirm the password" ;
                return false;
            }else {
                document.getElementById('cpasswords').innerHTML="" ;

            }
            if(cpass!==pass){
                document.getElementById('cpasswords').innerHTML="**password didn't match" ;
                return false;
            } 



            if(mobile == ""){
                document.getElementById('mnumber').innerHTML="**please fill mobile number" ;
                return false;
            }else {
                document.getElementById('mnumber').innerHTML="" ;

            }
            if(mobile.length!==10){
                document.getElementById('mnumber').innerHTML="**Number should be 10 digit" ;
                return false;
            }
            if(isNaN(mobile)){
                document.getElementById('mnumber').innerHTML="**Mobile number can only be digit" ;
                return false;
            } 



            if(email == ""){
                document.getElementById('emailid').innerHTML="**please fill email id" ;
                return false;
            } 
            if(email.indexOf('@') <= 0){
                document.getElementById('emailid').innerHTML="**Invalid Format" ;
                return false;
            }
            if(email.charAt(email.length-4)!='.'){
                document.getElementById('emailid').innerHTML="**Invalid Format" ;
                return false;
            }else {
               alert('submitted')

            }
        }
    </script>
</body>

</html>