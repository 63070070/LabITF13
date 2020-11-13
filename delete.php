<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'labitf-13.mysql.database.azure.com', 'it63070070@labitf-13', 'MESjmr18', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$id=$_REQUEST['id'];
$query = "DELETE FROM new_record WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view.php"); 
  
mysqli_close($conn);
?>
