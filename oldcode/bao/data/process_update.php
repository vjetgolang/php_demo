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
    $ma = $_POST['ID'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $link = $_POST['Link'];
    require 'env.php';
    $sql = "update thongtin set Name='$name', Email='$email', Link='$link' where ID=$ma";
    $data= mysqli_query($connect, $sql); 
    mysqli_close($connect);
    ?>
    <?php
    echo"Thanh cong !!! <br>";
    echo"$ma <br> $name <br> $email <br> $link <br>";
    ?>
    <img src="<?php echo $link ?>" alt="" width=100px>
    <br>
    <button><a href="http://localhost/php_demo/bao/data/">Data</Table></a></button>
</body>
</html>