<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    this is my role r2 
    <br>
    xet don hang
    <?php
    require '../connect.php';
    $sql = "SELECT * FROM product";
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
            <td>gia</td>
            <td>hinh anh</td>
            <td>sua</td>
            <td>xoa</td>
        </tr>
        <?php foreach($result as $key) {?>
        <tr>
            <td><?php echo $key['id'] ?></td>
            <td><?php echo $key['nameproduct'] ?></td>
            <td><?php echo $key['price'] ?></td>
            <td><img src="<?php echo $key['photo']?>" height="100px"/></td>
            <td><a href="update.php?id=<?php echo $key['id']?>">Update</a></td>
            <td><a href="delete.php?id=<?php echo $key['id']?>">Xóa</a></td>
        </tr>
        <?php } ?>
    </table>

</body>
</html>