<?php 
$name=$_POST['name'];
$mail=$_POST['mail'];
$link=$_POST['link'];
$connect= mysqli_connect('localhost','root','','qlsv');
mysqli_set_charset($connect, 'utf8');
$sql= "insert into sv(Ten,Mail,Link) values('$name','$mail','$link')";
mysqli_query($connect,$sql);

echo("Tao tai khoan thanh cong! <br> Ten: $name <br> Mail: $mail <br>");
echo'<img src="'.$link.'" alt="">'
?>