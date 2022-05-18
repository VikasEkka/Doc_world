<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user details</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <Br><h1 class="text-center text-primary">YOUR LIBRARY</h1><br>
            <table class="table table-striped table-hover table-bordered">
                <tr class="text-center">
                    <th>FILES</th>
                    <th>DELETE</th>
                </tr>
                <?php
                include 'conn.php';

                $q = "SELECT * FROM `docworld`";
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
            <button class="btn btn-dark" ><a href="insert.php">ADD</a></button>
        </div>
    </div>
    <script>
        function handledelete(){
            return confirm('Are you sure ?');
        }
        </script>
    
</body>
</html>