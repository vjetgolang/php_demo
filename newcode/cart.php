<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thong tin gio hang</title>
</head>

<body>
    <?php
    session_start();
    $cart = $_SESSION['cart'];
    $total = 0;
    $id = $_SESSION['id'];
    require 'admin/connect.php';
    $sql = "SELECT * FROM customer WHERE id = $id";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    ?>
    <h1>Thong tin gio hang: <?php echo $_SESSION["name"] ?></h1>
    <table border="1" width="100%">
        <tr>
            <th>Anh</th>
            <th>Ten</th>
            <th>Gia</th>
            <th>So luong</th>
            <th>Thanh tien</th>
            <th>Xoa</th>
        </tr>
        <?php foreach ($cart as $id => $product) { ?>
            <tr>
                <td><img src="admin/r2/<?php echo $product['image'] ?>" height="100px"></td>
                <td><?php echo $product['name'] ?></td>
                <td><?php echo $product['price'] ?></td>
                <td>
                    <a href="changequantity.php?id=<?php echo $id ?>&type=decre">-</a>
                    <?php echo $product['quantity'] ?><a href="changequantity.php?id=<?php echo $id ?>&type=incr">+</a>

                <td>

                    <?php
                    $subtotal = $product['price'] * $product['quantity'];
                    $total += $subtotal;
                    echo $subtotal ?>
                </td>
                <td><a href="delete.php?id=<?php echo $id ?>">Xoa</a></td>

            </tr>
        <?php } ?>
    </table>

    <br>
    <h1>Tong so tien san pham: <?php echo $total ?></h1>
    <h1>Thong tin nhan hang</h1>
    <form method="post" action="process_pil.php">
        Ten nguoi nhan: <input type="text" name="name_receive" value="<?php echo $row['name'] ?>"><br>
        SDT: <input type="text" name="phone_receive" value="<?php echo $row['phone_number'] ?>"><br>
        Dia chi: <input type="text" name="address" value="<?php echo $row['address'] ?>">
        <br>
        button: <input type="submit" value="Thanh toan">
    </form>
</body>

</html>