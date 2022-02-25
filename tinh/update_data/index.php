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
    include 'connect_sql.php';

    //lệch truy vấn
    $sql= "select * from person";

    //dữ liệu trả về theo truy vấn
    $data= mysqli_query($connect,$sql);

    ?>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Image</td>
        </tr>
        
        <?php foreach ($data as $value) { ?>
            <tr>
                <td><?php echo $value['id']?></td>
                <td><?php echo $value['name']?></td>
                <td><?php echo $value['email']?></td>
                <td><?php echo $value['password']?></td>
                <td><img src="<?php echo $value['image']?>" alt="" width= 100px></td>
                <td>
                    <a href="update_form.php?id=<?php echo $value['id']?>">Update</a>
                </td>
            </tr>
        <?php } ?>
        
    </table>
</body>
</html>