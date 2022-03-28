<?php
    $tieu_de= $_POST['title'];
    $noi_dung= $_POST['descript'];
    $link= $_POST['linkdes'];

    require 'envsql.php';

    $sql= "insert into data(tittle,des,link) 
    values('$tieu_de','$noi_dung','$link')";
    mysqli_query($connect,$sql);
    echo "them thanh cong $tieu_de $noi_dung $link";




?>