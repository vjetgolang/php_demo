<a href='index.php'>Back</a><br>
<?php
    $id = $_GET['id'];
    require 'connect_sql.php';
    $sql = "delete from product where id = $id";
    mysqli_query($connect,$sql);
    mysqli_close($connect);

    echo "deleted id = $id";
?>