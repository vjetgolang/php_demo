<?php
    $id= $_GET['id'];
    require "../connect.php";
    $sql= "DELETE FROM product WHERE id='$id'";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
    header("location:index.php");



?>