<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $image=$_POST['image'];

    $connect= mysqli_connect('localhost','root','','qlxx');
    mysqli_set_charset($connect, "utf8");

    $sql="insert into form(name, email,user, pass, image) values('$name','$email','$user', '$pass', '$image')";
    mysqli_query($connect,$sql);

    echo"name: $name
    <br>
    email: $email
    <br>
    user: $user
    <br>
    pass: $pass
    <br> ";
    echo '<img src="'.$image.'">';
?>
</body>
</html>