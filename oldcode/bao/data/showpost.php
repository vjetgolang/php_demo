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
    $maso = $_GET['ID'];
    include 'env.php';
    $sql = "select * from thongtin where ID = $maso";
    $data = mysqli_query($connect, $sql);
    $p = mysqli_fetch_array($data);
    ?>
    <h1><?php echo $p['ID']?></h1>
    <h1><?php echo $p['Name']?></h1>
    <h1><?php echo $p['Email']?></h1>
    <img src="<?php echo $p['Link']?>" alt="" width=100px>
    <?php mysqli_close($connect) ?>
    
</body>
</html>