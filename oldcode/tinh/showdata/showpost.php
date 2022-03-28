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
    $id= $_GET['id'];
    $connect= mysqli_connect('localhost','root','','city');
    mysqli_set_charset($connect,'utf8');
    $sql= "select * from person where id=$id";
    $data= mysqli_query($connect,$sql);
    $doan= mysqli_fetch_array($data);
    ?>
    <h1><?php echo $doan['id']?></h1>
    <h1><?php echo $doan['name']?></h1>
    <h1><?php echo $doan['email']?></h1>
    <h1><?php echo $doan['password']?></h1>
    <img src="<?php echo $doan['link']?>" width=100px>
    <?php mysqli_close($connect) ?>
</body>
</html>