<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    day la ban danh cho r1
    <br>
    kiem duyet vien
    <?php
    require '../connect.php';
    $sql = "SELECT * FROM info";
    $result = mysqli_query($connect,$sql);
    // $data= mysqli_fetch_array($result);
    ?>
    <a href="insert.php">Add</a>
    <?php
    require '../menu.php';
    ?>
    
    <table border='1' width="100%">
        <tr>
            <td>id</td>
            <td>ten</td>
            <td>email</td>
            <td>sua</td>
            <td>xoa</td>
        </tr>
        <?php foreach($result as $key) {?>
        <tr>
            <td><?php echo $key['id'] ?></td>
            <td><?php echo $key['ten'] ?></td>
            <td><?php echo $key['email'] ?></td>
            <td><a href="update.php?id=<?php echo $key['id']?>"><?php echo $key['id']?></a></td>
            <td><a href="delete.php?id=<?php echo $key['id']?>">Xóa</a></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>