<?php

include 'conn.php';

$id = $_GET['id'];

$select = "SELECT * FROM `docworld` WHERE id = $id";
$result = $con->query($select);
while($row = $result->fetch_object()){
  $pdf = $row->file;
  $name = $row->fname;
}

echo '<h1 style="color: blue">Here is your document</h1>';
echo '<strong>File Name : </strong>'.$pdf;

// header('Content-type: application/pdf'||'Content-type: text/html'); 
// header('Content-Disposition: inline; filename="' .$pdf. '"'); 
// @readfile($pdf);  
?>
<br/><br/>

<iframe src="<?php echo $pdf; ?>" width="90%" height="500px">
</iframe>