<?php
$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$password = addslashes($_POST['password']);

require 'admin/connect.php';
$sql = "select count(*) from customer where email='$email'";
//die($_SESSION["name"]);
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result)['count(*)'];
echo $row;
if ($row == 1) {
    header('location:signup.php');
    exit;
}
$sql = "INSERT INTO customer(name,email,password)
    VALUES ('$name','$email','$password')";
mysqli_query($connect, $sql);

// get id from customer
$sql = "select id from customer where email='$email'";
$result = mysqli_query($connect, $sql);
$id = mysqli_fetch_array($result)['id'];
// start session
session_start();
$_SESSION["name"] = $name;
$_SESSION["id"] = $id;


mysqli_close($connect);
header('location:index.php');
