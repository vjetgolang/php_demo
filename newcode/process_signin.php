<?php

$email = $_POST["email"];
$password = $_POST["password"];
if(isset($_POST["remember"])){
    $remember = true;
}else{
    $remember = false;
}

require 'admin/connect.php';
$sql = "select * from customer where email='$email' and password='$password'";
$result = mysqli_query($connect, $sql);
$row = mysqli_num_rows($result);


if ($row == 1) {
    session_start();
    $each = mysqli_fetch_array($result);
    $_SESSION["name"] = $each["name"];
    $_SESSION["id"] = $each["id"];
    if($remember){
        setcookie("remember", $each['id'], time()+60*60*24*30);
    }
    header('location:user.php');
} else {
    session_start();
    $_SESSION["error"] = "Email hoặc Password không đúng";
    header('location:signin.php');
}
