<?php
    	$id=$_GET['ID'];
	$conn = mysqli_init();
mysqli_real_connect($conn, 'labitf-13.mysql.database.azure.com', 'it63070070@labitf-13', 'MESjmr18', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
	$Result=mysqli_fetch_array($id);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body>

  <form action = "edit.php?ID=<?php echo $Result['ID']?>" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" id="idName" placeholder="Enter Name"> <br>
    Comment:<br>
    <textarea rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter comment"></textarea><br> 
    Link:<br>
    <input type="text" name = "link" id="idLink" placeholder="Enter Link"> <br><br>
    <input type="submit" id="commentBtn" class="btn btn-warning" value="Update">
  </form> 

</body>
</html>
