<?php require '../check_admin.php' ?>
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
    $id = $_GET['id'];
    require '../menu.php';
    require '../connect.php';
    $sql = "SELECT * FROM product WHERE id='$id'";
    $result = mysqli_query($connect, $sql);
    $dataproduct = mysqli_fetch_array($result);

    $sql = "SELECT * FROM info";
    $datamanage = mysqli_query($connect, $sql);

    ?>
    <form action="process_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $dataproduct['id'] ?>">
        nhap ten sp: <input type="text" name="name" value="<?php echo $dataproduct['nameproduct'] ?>">
        <br>
        nhap gia: <input type="number" name="price" value="<?php echo $dataproduct['price'] ?>">
        <br>
        file: <input type="file" name="photonew">
        <br>
        Old photo
        <img src="<?php echo $dataproduct['photo'] ?>" alt="" height="100px">
        <input type="hidden" name="photo_old" value="<?php echo $dataproduct['photo'] ?>">
        <br>
        nguoi quan ly
        <select name="manager">
            <?php foreach ($datamanage as $key) { ?>
                <option value="<?php echo $key['id'] ?>" <?php if ($dataproduct['user_id'] ==  $key['id']) { ?> selected <?php } ?>>
                    <?php echo $key['ten'] ?>
                </option>
            <?php } ?>
        </select>
        <button>send</button>
    </form>
</body>

</html>