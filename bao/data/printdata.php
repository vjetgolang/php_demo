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
    $connect = mysqli_connect('localhost', 'root', '', 'qlkh');

    mysqli_set_charset($connect, 'utf8');

    $sql = "select * from thongtin";

    $data = mysqli_query($connect, $sql);
    

    
    ?>

    <table boder="1">
        <tr>
            <td>STT</td>
            <td>Name</td>
            <td>Email</td>
            <td>link</td>
        </tr>

        <?php foreach ($data as $value) { ?>
            <tr>
                <td><?php echo $value['ID'] ?></td>
                <td><a href="showpost.php?ID=<?php echo $value['ID'] ?>"><?php echo $value['Name'] ?></a></td>
                <td><?php echo $value['Email'] ?></td>
                <td><img src="<?php echo $value['Link'] ?>" alt="" width=100px></td>
            </tr>

        <?php } ?>

        

    </table>

    
</body>
</html>