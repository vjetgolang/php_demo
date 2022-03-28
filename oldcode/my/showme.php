<?php
$name= $_POST['name'];
$email=$_POST['email'];
$image=$_POST['image'];
$connect = mysqli_connect('localhost','root','','qlks');
mysqli_set_charset($connect,'utf8');
$sql="insert into information(Name,Email,Image)
values($name,$email,$image)";
mysqli_query($connect,$sql);
echo "Xin chao $name <br>";
echo "Email: $email <br>";
echo '<img src="'.$image.'" alt="">';
?>