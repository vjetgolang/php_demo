<?php 
    $mssv=$_POST['mssv'];
    $hoten=$_POST['ten'];
    $lop=$_POST['lop'];
    $sql=mysqli_connect('localhost', 'root', '', 'qlsv');
    mysqli_set_charset($sql,"utf8");
    $input="insert into sinhvien(Mssv,HoTen,Lop)
            values('$mssv','$hoten','$lop')";
    mysqli_query($sql,$input);
    echo ("Da them thanh cong $mssv <br>");
    echo ("Da them thanh cong $hoten <br>");
    echo ("Da them thanh cong $lop<br>");
?>