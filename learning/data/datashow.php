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
    include 'envsql.php';

    //lệch truy vấn
    $sql= "select * from data";

    //dữ liệu trả về theo truy vấn
    $data= mysqli_query($connect,$sql);

    ?>

    <table border="1">
        <tr>
            <td>Ma</td>
            <td>Tieu de</td>
            <td>Noi dung</td>
            <td>Link</td>
        </tr>
        
        <?php foreach ($data as $value) { ?>
            <tr>
                <td><?php echo $value['id']?></td>
                <td><a target="_blank" href="showpost.php?id=<?php echo $value['id']?>"><?php echo $value['tittle']?></a></td>
                <td><?php echo $value['des']?></td>
                <td><img src="<?php echo $value['link']?>" alt="" width= 100px></td>
            </tr>
        <?php } ?>
        
    </table>
</body>
</html>