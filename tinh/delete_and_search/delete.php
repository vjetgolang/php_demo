<?php
    $id = $_GET['id'];
    require 'connect_sql.php';
    $sql = "delete from person where id = $id";
    mysqli_query($connect,$sql);
    mysqli_close($connect);

    echo "deleted id = $id";
?>