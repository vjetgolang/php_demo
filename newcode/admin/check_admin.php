<?php
session_start();
if (!isset($_SESSION['level'])) {
    header("Location:../index.php");
}
//Nếu người dùng không có level thì chuyển hướng về trang index.php