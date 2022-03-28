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
    require '../menu.php';
    require '../connect.php';
    $sql = "SELECT * FROM info";
    $result = mysqli_query($connect,$sql);
    ?>
    <form action="process_insert.php" method="post" enctype="multipart/form-data" >
        nhap ten sp: <input type="text" name="name">
        <br>
        nhap gia: <input type="number" name="price">
        <br>
        file: <input type="file" name="photo">
        <br>
        nguoi quan ly
        <select name="manager">
            <?php foreach($result as $key) {?>
            <option value="<?php echo $key['id'] ?>">
                <?php echo $key['ten'] ?>
            </option>
            <?php } ?>
        </select>
        <button>send</button>
    </form>
</body>
</html>