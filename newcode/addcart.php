<?php
session_start();
//unset($_SESSION['cart']);
// die();
$id = $_GET['id'];

if (empty($_SESSION['cart'][$id])) {
   require 'admin/connect.php';
   $sql = "SELECT * FROM product WHERE id = $id";
   $result = mysqli_query($connect, $sql);
   $product = mysqli_fetch_array($result);
   $_SESSION['cart'][$id]['name'] = $product['nameproduct'];
   $_SESSION['cart'][$id]['price'] = $product['price'];
   $_SESSION['cart'][$id]['image'] = $product['photo'];
   $_SESSION['cart'][$id]['quantity'] = 1;
} else {
    $_SESSION['cart'][$id]['quantity']++;
}
echo json_encode($_SESSION['cart']);
