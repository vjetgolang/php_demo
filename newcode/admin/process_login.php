<?php
$email= $_POST['email'];
$password= $_POST['password'];
require 'connect.php';
 $sql= "select * from admin 
where email= '$email' and password= '$password'";
 $result= mysqli_query($connect,$sql);
 if (mysqli_num_rows($result)){
     $data= mysqli_fetch_array($result);
     session_start();
     $_SESSION['id']= $data['id'];
     $_SESSION['name']= $data['name'];
     $_SESSION['level']= $data['level'];
     header('location:root/index.php');
     exit();
 }
 header('location:index.php');
 ?>
