<?php
$name = $_POST['name'];
$email = $_POST['email'];
$link = $_POST['link'];
$connect = mysqli_connect('localhost', 'root', '', 'qlkh');

mysqli_set_charset($connect, 'utf8');

$sql = "insert into thongtin(Name, Email, Link)
values('$name', '$email', '$link')";

mysqli_query($connect,$sql);

echo("Thanh cong <br> $name <br> $email <br>");
echo'<img src="'.$link.'" alt=""> <br>';

?>