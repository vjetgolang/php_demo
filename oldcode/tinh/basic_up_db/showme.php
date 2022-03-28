<?php

//Post data to DB
$name= $_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$image=$_POST['image'];

//Connect DB
$connect = mysqli_connect('localhost','root','','city');

//Support utf8 (no font error)
mysqli_set_charset($connect,'utf8');

//Query
$sql="insert into person(name,email,password,image)
values('$name','$email','$password','$image')";

//Excute
mysqli_query($connect,$sql);

//Output notification
echo "Name: $name <br>";
echo "Email: $email <br>";
echo "Password: $password <br>";
echo '<img src="'.$image.'" alt="">';
?>