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
    include 'connectSql.php';
    $search='';
    if(isset($_GET['searchBox'])){
        $search=$_GET['searchBox'];
    }
    $sql="select * from sv where Ten like '%$search%'";
    $data=mysqli_query($connect,$sql);
    ?>
<table border="1">
    <caption>
        <form action="">
            <input type="search" name="searchBox" value="<?php echo $search ?>">
        </form>
    </caption>
        <tr>
            <td>STT</td>
            <td>Ten</td>
            <td>Mail</td>
            <td>Link</td>
        </tr>
        <?php foreach ($data as $value) { ?>
        <tr>
            <td><?php echo $value['ID'] ?></td>
            <td><?php echo $value['Ten'] ?></td>
            <td><?php echo $value['Mail'] ?></td>
            <td><img src="<?php echo $value['Link'] ?>" alt="" width=100px></td>
            <td><a href="delete.php?id=<?php echo $value['ID'] ?>">Delete</a></td>
        </tr>
        <?php } ?>
</body>
</html>