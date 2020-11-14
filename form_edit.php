<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'labitf-13.mysql.database.azure.com', 'it63070070@labitf-13', 'MESjmr18', 'itflab', 3306);
$res = mysqli_query($conn, "SELECT * FROM guestbook WHERE ID='$id'");
$row = mysqli_fetch_array($res)

if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta charset="utf-8">

<div class="container" style="width:600px;margin-top:50px;">
  <form action = "edit.php?ID=<?php echo $row['ID']; ?>" method = "post" id="CommentForm" class="form-group">
    Name:<br>
    <input type="text" name = "name" id="idName" value="<?php echo "$row[Name]"; ?>" <br>
    Comment:<br>
    <input type="text" name = "comment" id="idComment" value="<?php echo "$row[Comment]"; ?>" <br>
    Link:<br>
    <input type="text" name = "link" id="idLink" value="<?php echo "$row[Link]"; ?>"> <br><br>
    <input type="submit" id="commentBtn"class="btn btn-outline-warning">
  </form> 

</body>
</html>
