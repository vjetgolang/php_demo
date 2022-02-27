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
    include 'env.php';

    $sql = "select * from thongtin";

    $data = mysqli_query($connect, $sql);
    

    
    ?>

    <table border="1">
        <tr>
            <td>STT</td>
            <td>Name</td>
            <td>Email</td>
            <td>link</td>
            <td>Hanh dong</td>
        </tr>

        <?php foreach ($data as $value) { ?>
            <tr>
                <td><?php echo $value['ID'] ?></td>
                <td><a href="showpost.php?ID=<?php echo $value['ID'] ?>"><?php echo $value['Name'] ?></a></td>
                <td><?php echo $value['Email'] ?></td>
                <td><img src="<?php echo $value['Link'] ?>" alt="" width=100px></td>
                <td><a href="showupdate.php?ID=<?php echo $value['ID'] ?>">Update</a></td>
            </tr>

        <?php } ?>

        

    </table>

    
</body>
</html>