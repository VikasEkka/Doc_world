<?php
session_start();

if(!$_SESSION['user']){
  echo "you are logged out";
  header('location:login.php');
}
?>

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


          <div class="container">
            <table class="table table-striped table-hover table-bordered">
                <tr class="text-center" style=" text-align : center !important">
                    <th>
                        <span> FILES </span>
                        <button ><a href="insert.php">+</a></button>
                    </th>
                    <th>DELETE</th>
                </tr>
                <?php
                include 'conn.php';

                $usercurrent = $_SESSION['user'];
                
                $q = "SELECT * FROM `docworld` WHERE user = '$usercurrent'";
                 $query = mysqli_query($con,$q);
  
                 while($res = mysqli_fetch_array($query)){
                    $file = $res['file'];
                    $name = $res['fname'];

                ?>
                <tr class="text-primary text-center">
                    <td><button class="btn btn-link"><a href="view.php?id=<?php echo $res['id'];?>"><?php echo $name ?></a></button></td>
                    <td><button onclick="return handledelete();" class="btn btn-dark"><a href="delete.php?id=<?php echo $res['id'];?>">Delete</a></button></td>
                </tr>

                <?php
                 }
                    ?>
            </table>
        </div>


        <script>
        function handledelete(){
            return confirm('Are you sure ?');
        }
        </script>


                    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</body>
</html>