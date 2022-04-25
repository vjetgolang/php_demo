<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thong tin gio hang</title>
</head>
<body>
<?php
session_start();
$cart= $_SESSION['cart'];
?>
<h1>Thong tin gio hang</h1>
<table border="1" width="100%">
    <tr>
        <th>Anh</th>
        <th>Ten</th>
        <th>Gia</th>
        <th>So luong</th>
        <th>Thanh tien</th>
        <th>Xoa</th>
    </tr>
    <?php foreach ($cart as $id=> $product){?>
    <tr>
        <td><img src="admin/r2/<?php echo $product['image']?>"  height="100px"></td>
        <td><?php echo $product['name']?></td>
        <td><?php echo $product['price']?></td>
        <td>
            <a href="changequantity.php?id=<?php echo $id ?>&type=decre">-</a>
            <?php echo $product['quantity']?><a href="changequantity.php?id=<?php echo $id ?>&type=incr">+</a>

        <td>

            <?php echo $product['price']* $product['quantity']?>
        </td>
        <td><a href="delete.php?id=<?php echo $id?>">Xoa</a></td>

    </tr>
    <?php } ?>
</table>
</body>
</html>