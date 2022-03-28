<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href='index.php'>Back</a><br>

    <?php
    $id= $_POST['id'];
    $name= $_POST['name'];
    $unit= $_POST['unit'];
    $price= $_POST['price'];
    $inventory= $_POST['inventory'];
    require 'connect_sql.php';
    $sql= "update product set name='$name',unit='$unit',price='$price',inventory='$inventory' where id=$id";
    $data= mysqli_query($connect,$sql);
    mysqli_close($connect);
    ?>
    <?php
    echo "Update successful";
    
    ?>
</body>
</html>