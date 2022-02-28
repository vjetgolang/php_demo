<?php 
    $mssv=$_POST['mssv'];
    $hoten=$_POST['ten'];
    $lop=$_POST['lop'];
    include "mysqli_connect.php";
    $input="insert into sinhvien(Mssv,HoTen,Lop)
            values('$mssv','$hoten','$lop')";
    mysqli_query($sql,$input);
    echo ("Da them thanh cong $mssv <br>");
    echo ("Da them thanh cong $hoten <br>");
    echo ("Da them thanh cong $lop<br>");
?>