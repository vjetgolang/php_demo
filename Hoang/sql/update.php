<?php
        $mssv=$_POST['mssv'];
        $hoten=$_POST['ten'];
        $lop=$_POST['lop'];
        require "mysqli_connect.php";

        $input="update sinhvien set HoTen='$hoten',Lop='$lop' where Mssv=$mssv";
        mysqli_query($sql,$input);
        mysqli_close($sql);
        echo "da update thanh cong";
       
?>