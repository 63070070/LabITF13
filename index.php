<html>
<head>
    <title>ITF Lab</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="utf-8">
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labitf-13.mysql.database.azure.com', 'it63070070@labitf-13', 'MESjmr18', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="1000" border="1">
    <tr class="table-primary">
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
    <th width="500"> <div align="center">Action </div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td class="text-success"><?php echo $Result['Name'];?></div></td>
    <td class="text-success"><?php echo $Result['Comment'];?></td>
    <td class="text-success"><?php echo $Result['Link'];?></td>
    <td><button type="button" class="btn btn-outline-warning">แก้ไข</button>
        <button type="button" class="btn btn-outline-danger">ลบ</button></td>
    
  </tr>
    <tr><button type="button" class="btn btn-outline-warning">แก้ไข</button></tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
