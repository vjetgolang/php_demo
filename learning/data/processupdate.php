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
    $ma= $_POST['ma'];
    $tieude= $_POST['title'];
    $noidung= $_POST['descript'];
    $link= $_POST['linkdes'];
    require 'envsql.php';
    $sql= "update data set tittle='$tieude',des='$noidung',link='$link' where id=$ma";
    $data= mysqli_query($connect,$sql);
    mysqli_close($connect);
    ?>
    <?php
    echo "$ma,$tieude,$noidung,$link";
    
    ?>
</body>
</html>