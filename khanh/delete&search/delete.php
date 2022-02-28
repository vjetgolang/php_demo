<?php  
$id=$_GET['id'];
require 'connectSql.php';
$sql="delete from sv where ID=$id";
mysqli_query($connect,$sql);
mysqli_close($connect);

echo "Complete delete! $id";
?>