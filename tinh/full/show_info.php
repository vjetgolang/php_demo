<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infomation</title>
</head>
<body>
    <?php
    $id= $_GET['id'];
    include 'connect_sql.php';
    $sql= "select * from price where id=$id";
    $data= mysqli_query($connect,$sql);
    $row= mysqli_fetch_array($data);
    ?>
    <h1><?php echo $row['id']?></h1>
    <h1><?php echo $row['name']?></h1>
    <h1><?php echo $row['unit']?></h1>
    <h1><?php echo $row['price']?></h1>
    <h1><?php echo $row['inventory']?></h1>
    <?php mysqli_close($connect) ?>
</body>
</html>