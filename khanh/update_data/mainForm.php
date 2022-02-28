<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- kết nối DB lấy dữ liệu -->
    <?php
    include 'connect.php';

    //lệch truy vấn
    $sql= "select * from sv";

    //dữ liệu trả về theo truy vấn
    $data= mysqli_query($connect,$sql);

    ?>
<table border="1">
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
            <td><a href="updateForm.php?id=<?php echo $value['ID'] ?>">Update</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>