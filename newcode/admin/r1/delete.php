<?php 
    if(empty($_GET['id'])){
        header('location:index.php?erroll=Bắt buộc nhập id');
    }

        $id= $_GET['id'];
        require '../connect.php';
        $sql = "DELETE FROM info 
    WHERE id = $id";
    $result= mysqli_query($connect,$sql);
    mysqli_close($connect);
    header('location:index.php?success=delete data success');

?>