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
    require 'connect_sql.php';
    $sql= "select * from product where id=$ma";
    $data= mysqli_query($connect,$sql);
    $row= mysqli_fetch_array($data);
    ?>
<form action="updating_process.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']?>">
        Name
        <input type="text" name="name" value="<?php echo $row['name']?>">
        <br>
        Unit
        <input type="text" name= "unit" value="<?php echo $row['unit']?>">
        <br>
        Price
        <input type="text" name="price" value="<?php echo $row['price']?>">
        Inventory
        <input type="text" name="inventory" value="<?php echo $row['inventory']?>">
        <button>Send</button>
    </form>
</body>
</html>