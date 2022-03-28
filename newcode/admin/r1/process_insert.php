<?php
if(empty($_POST['name'])|| empty($_POST['email'])){
    header('location:insert.php?erroll=reqire field name and field email');
}else{
$name= $_POST['name'];
$email= $_POST['email'];
require '../connect.php';
$sql = "INSERT INTO info(ten,email) 
VALUES ('$name','$email')";
mysqli_query($connect,$sql);
mysqli_close($connect);
header('location:index.php?success=add data success');}
?>