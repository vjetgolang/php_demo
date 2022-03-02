<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
        }
        a {
            text-decoration: none;
            color: red;
        }
    </style>
</head>
<body>
    
    <?php
    
    if(isset($_GET['trang'])) {
        $trang = $_GET['trang'];
    }
    


    $search_name='';
    include 'env.php';
    //so trang 
    $trang=1;
    $sql_dulieu = "select count(*) from thongtin";
    $result_dulieu = mysqli_query($connect,$sql_dulieu);
    $row_dulieu= mysqli_fetch_array($result_dulieu);
    $dulieudemduoc = $row_dulieu['count(*)'];

    $baiviet1trang = 2;
    $sotrang= ceil($dulieudemduoc/$baiviet1trang);
    $skip= ($trang-1)*$baiviet1trang;
    
    //tim kiem trong name 
    if(isset($_GET['searching'])) {
        $search_name = $_GET['searching'];
    }



    $sql="SELECT * FROM thongtin WHERE Name LIKE '%$search_name%'
    limit $baiviet1trang offset $skip";

    $data = mysqli_query($connect, $sql);
    

    
    ?>
    <button><a href="add_member.php">Them</a></button>
    

    <table border="1">
        <caption>
            <form action="">
                Nhap ten can tim:   
                <input type="search" name="searching" value ="<?php echo $search_name?>">
            </form>
        </caption>
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
                <td>
                    <a href="showupdate.php?ID=<?php echo $value['ID'] ?>">Update</a>
                    <br>
                    <br>
                    <a href="delete.php?ID=<?php echo $value['ID'] ?>">Delete</a>
                </td>
            </tr>

        <?php } ?>

    </table>
    <?php for($i=1;$i<= $sotrang;$i++){?>
        <a href="?trang=<?php echo $i?>"><?php echo $i?></a>
    <?php }?>
    

    
</body>
</html>