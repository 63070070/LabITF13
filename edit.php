<?php
$id=$_GET['ID'];

$conn = mysqli_init();
mysqli_real_connect($conn, 'labitf-13.mysql.database.azure.com', 'it63070070@labitf-13', 'MESjmr18', 'itflab', 3306);




$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "UPDATE guestbook SET Name='$name', Comment='$comment', Link='$link' WHERE ID='$id'"; 
if (mysqli_query($conn, $sql)) {
    header("Location: index.php"); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
mysqli_close($conn);
?>
