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
    $trang=1;
    $timkiem='';
    if(isset($_GET['trang'])){
        $trang= $_GET['trang'];
    }
    include 'envsql.php';
    if(isset($_GET['searching'])){
        $timkiem= $_GET['searching'];
    }
    $sql_sodulieu= "SELECT count(*) FROM data where tittle like '%$timkiem%'";
    $result_sodulieu= mysqli_query($connect,$sql_sodulieu);
    $row_sodulieu= mysqli_fetch_array($result_sodulieu);
    $dulieudemduoc= $row_sodulieu['count(*)'];


    $so_baiviettren1trang= 2;
    $sotrang= ceil($dulieudemduoc/$so_baiviettren1trang);
    $boqua= ($trang-1)*$so_baiviettren1trang;


    // else{
    //     //lệch truy vấn
    //     $sql= "select * from data";
    // }
    $sql= "select * from data where tittle like '%$timkiem%'
    limit $so_baiviettren1trang offset $boqua";


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
                <a href="showupdate.php?id=<?php echo $value['id']?>">update</a>
                    <a href="delete.php?id=<?php echo $value['id']?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
        
    </table>
    <?php for($i=1;$i<=$sotrang;$i++) { ?>
        <a href="?trang=<?php echo $i?>&searching=<?php echo $timkiem?>"><?php echo $i ?></a>
    <?php } ?>
</body>
</html>