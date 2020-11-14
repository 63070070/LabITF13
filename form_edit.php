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

<html>
<head>
	<title>Update Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body>

  <form action = "update.php?ID=<?php echo $row['ID']; ?>" method = "post" id="CommentForm" class="form-group">
    Name:<br>
    <input type="text" name = "Name" id="idName" value="<?php echo "$row[Name]"; ?>" <br>
    Comment:<br>
    <input type="text" name = "Comment" id="idComment" value="<?php echo "$row[Comment]"; ?>" <br>
    Link:<br>
    <input type="text" name = "Link" id="idLink" value="<?php echo "$row[Link]"; ?>"> <br><br>
    <input type="submit" id="commentBtn"class="btn btn-outline-warning">
  </form> 

</body>
</html>
