<?php
$ten= $_POST['name'];
$email= $_POST['email'];
//connect sql
$connect= mysqli_connect('localhost','root','','qlkh');
//support utf8(khong loi phong)
mysqli_set_charset($connect,'utf8');
//truy van
$sql= "insert into thongtin(name,email)
values('$ten','$email')";

//excute
mysqli_query($connect,$sql);

echo("da them thanh cong $ten, $email");
?>