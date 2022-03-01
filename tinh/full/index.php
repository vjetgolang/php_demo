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

    include 'connect_sql.php';

    $pages=1;
    if(isset($_GET['pages'])){
        $pages= $_GET['pages'];
    }

    //Query counting data (Lệnh truy vấn đếm số lượng data trong bảng)
    $query = "select count(*) from person";
    //Make a query on DB and save in result_counted(Thực hiện truy vấn vào DB và lưu vào result_counted)
    $result_counted = mysqli_query($connect,$query);
    //Returns the result of the query as an array and stores it in row(Trả về kết quả của truy vấn dưới dạng mảng và lưu vào row()
    $row = mysqli_fetch_array($result_counted);
    //Save number of data(lưu số lượng dữ liệu đếm đc)
    $amount_of_data = $row['count(*)'];

    //Number of post in one page(Số bài viết trên một trang)
    $amount_of_post_per_page= 2;
    //Calculate number of pages = amount of data / number of posts per page(Tính số lượng trang = số lượng data / số bài viết trên một trang)
    $number_of_page= ceil($amount_of_data/$amount_of_post_per_page);
    //Remove some posts when they've been added to the page(Loại một số bài viết khi bài viết đó đã được thêm vào trang) 
    $skip= ($pages-1)*$amount_of_post_per_page;

    $search = '';

    if (isset($_GET['search_box'])){
        $search = $_GET['search_box'];
    }

    $sql = "select * from person where name like '%$search%' limit $amount_of_post_per_page offset $skip";

    $data = mysqli_query($connect,$sql);

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
                <td><a href="show_info.php?id=<?php echo $value['id']?>"><?php echo $value['name']?></a></td>
                <td><?php echo $value['email']?></td>
                <td><?php echo $value['password']?></td>
                <td><img src="<?php echo $value['image']?>" alt="" width= 100px></td>
                <td>
                    <a href="update_form.php?id=<?php echo $value['id']?>">Update</a>
                </td>
                <td>
                    <a href="delete.php?id=<?php echo $value['id']?>">Delete</a>
                </td>
            </tr>
            
        <?php } ?>
        
    </table><br>

    <b>Search:</b>
    <caption>
            <form action="">
                <input type="search" name='search_box' value="<?php echo $search?>">
            </form>
    </caption><br>

    <a href="add_data.php"><b>Add one row</b></a><br>

    <?php for($i=1;$i<=$number_of_page;$i++) { ?>
        <a href="?pages=<?php echo $i?>"><?php echo $i ?></a>
    <?php } ?>

</body>
</html>