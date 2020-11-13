<!DOCTYPE html>
<html>
<head>
	<title>Delete Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<meta charset="utf-8">
</head>
<body>
  <form action = "delete.php" method = "post" id="CommentForm" >
    Name:<br>
    <input type="text" name = "name" id="idName" placeholder="Enter Name"> <br>
    <input type="submit" id="commentBtn" class="btn btn-warning" value="Delete">
  </form> 
</body>
</html>