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
        $ma = $_GET['ID'];
        $link_home = "http://localhost/php_demo/bao/data/";
        require 'env.php';
        $sql = "DELETE FROM thongtin WHERE ID=$ma";
        $data= mysqli_query($connect, $sql); 
        mysqli_close($connect);

        echo"Xoa thanh cong !!! <br>";
        echo'<button><a href='.$link_home.'>Data</a></button>';
    ?>
</body>
</html>