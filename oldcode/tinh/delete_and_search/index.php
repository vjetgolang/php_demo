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

    $search = '';

    if (isset($_GET['search_box'])){
        $search = $_GET['search_box'];
    }

    $sql = "select * from person where name like '%$search%'";

    $data = mysqli_query($connect,$sql);

    ?>

    <table border="1">
        <caption>
            <form action="">
                <input type="search" name='search_box' value="<?php echo $search?>">
            </form>
        </caption>

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
                    <a href="delete.php?id=<?php echo $value['id']?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
        
    </table>
</body>
</html>