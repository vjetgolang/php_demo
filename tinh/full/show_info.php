<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
        include 'connect_sql.php'; 
        echo $value['email'];
    ?></title>
</head>
<body>
    <?php
    $id= $_GET['id'];
    include 'connect_sql.php';
    $sql= "select * from person where id=$id";
    $data= mysqli_query($connect,$sql);
    $row= mysqli_fetch_array($data);
    ?>
    <h1><?php echo $row['id']?></h1>
    <h1><?php echo $row['name']?></h1>
    <h1><?php echo $row['email']?></h1>
    <h1><?php echo $row['password']?></h1>
    <img src="<?php echo $row['image']?>" width=100px>
    <?php mysqli_close($connect) ?>
</body>
</html>