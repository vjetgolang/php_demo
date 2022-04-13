<?php

$email = $_POST["email"];
$password = $_POST["password"];

require 'admin/connect.php';
$sql = "select * from customer where email='$email' and password='$password'";
$result = mysqli_query($connect, $sql);
$row = mysqli_num_rows($result);


if ($row == 1) {
    session_start();
    $each = mysqli_fetch_array($result);
    $_SESSION["name"] = $each["name"];
    $_SESSION["id"] = $each["id"];
    header('location:user.php');
} else {
    header('location:signin.php');
}
