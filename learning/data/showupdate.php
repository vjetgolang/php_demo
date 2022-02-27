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
    $ma= $_GET['id'];
    require 'envsql.php';
    $sql= "select * from data where id=$ma";
    $data= mysqli_query($connect,$sql);
    $dulieu= mysqli_fetch_array($data);

    
    ?>
<form action="processupdate.php" method="post">
    <input type="hidden" name="ma" value="<?php echo $dulieu['id']?>">
        nhap tieu de
        <input type="text" name="title" value="<?php echo $dulieu['tittle']?>">
        <br>
        nhap noi dung
        <input type="text" name= "descript" value="<?php echo $dulieu['des']?>">
        <br>
        nhap link
        <input type="text" name="linkdes" value="<?php echo $dulieu['link']?>">
        <button>send</button>
    </form>
</body>
</html>