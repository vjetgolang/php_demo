<?php
session_start();
$id_customer = $_SESSION['id'];
$name_receive = $_POST['name_receive'];
$phone_receive = $_POST['phone_receive'];
$address = $_POST['address'];
$cart = $_SESSION['cart'];




$status = 0;
$total_price = 0;
foreach ($cart as $key => $value) {
    $total_price += $value['price'] * $value['quantity'];
}
require 'admin/connect.php';
$sql = "INSERT INTO orders(id_customer, name_receive, phone_receive, address, status, total_price ) 
VALUES ('$id_customer', '$name_receive', '$phone_receive', '$address', '$status','$total_price')";
mysqli_query($connect, $sql);
$sql = "SELECT max(id) FROM orders where id_customer = '$id_customer'";
$result = mysqli_query($connect, $sql);
//die();
$order_id = mysqli_fetch_array($result)['max(id)'];


foreach ($cart as $key => $value) {
    $quantity = $value['quantity'];
    $sql = "INSERT INTO order_product(id_order, id_product, quantity) 
    VALUES ('$order_id', '$key', '$quantity')";
    mysqli_query($connect, $sql);
}
unset($_SESSION['cart']);
header('location: index.php');
