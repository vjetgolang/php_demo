<?php
if(empty($_POST['name'])|| empty($_POST['email'])){
    header('location:insert.php?erroll=reqire field name and field email');
}else{
$id= $_POST['id'];
$name= $_POST['name'];
$email= $_POST['email'];
require '../connect.php';
$sql = "update info set ten='$name',email='$email' where id=$id";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php?success=update data success');
}
?>
