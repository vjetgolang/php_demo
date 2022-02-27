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
    $timkiem='';
    include 'envsql.php';
    if(isset($_GET['searching'])){
        $timkiem= $_GET['searching'];
    }
    // else{
    //     //lệch truy vấn
    //     $sql= "select * from data";
    // }
    $sql= "select * from data where tittle like '%$timkiem%'";

    //dữ liệu trả về theo truy vấn
    $data= mysqli_query($connect,$sql);

    ?>

    <table border="1">
            <caption>
                <form action="">
                    <input type="search" name="searching" value="<?php echo $timkiem?>">
                </form>
            </caption>
        <tr>
            <td>Ma</td>
            <td>Tieu de</td>
            <td>Noi dung</td>
            <td>Link</td>
            <td>Action</td>
        </tr>
        <a href="form.php">Add</a>
        <?php foreach ($data as $value) { ?>
            <tr>
                <td><?php echo $value['id']?></td>
                <td><a target="_blank" href="showpost.php?id=<?php echo $value['id']?>"><?php echo $value['tittle']?></a></td>
                <td><?php echo $value['des']?></td>
                <td><img src="<?php echo $value['link']?>" alt="" width= 100px></td>
                <td>
                    <a href="delete.php?id=<?php echo $value['id']?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
        
    </table>
</body>
</html>