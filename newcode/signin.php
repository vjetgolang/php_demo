<?php
session_start();
if (isset($_SESSION['error'])) {
    echo '<script>alert("' . $_SESSION['error'] . '")</script>';
    unset($_SESSION['error']);
}
if (isset($_COOKIE['remember'])) {
    $token = $_COOKIE['remember'];
    require 'admin/connect.php';
    $sql = "SELECT * FROM customer WHERE token='$token' limit 1";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($result);
    $_SESSION["name"] = $row["name"];
    $_SESSION["id"] = $row["id"];
}

if (isset($_SESSION['id'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dang nhap</title>
</head>

<body>
    <form method="POST" action="process_signin.php">
        email: <input type="email" name="email"><br>
        <br>
        password: <input type="password" name="password"><br>
        <br>
        ghi nho dang nhap
        <input type="checkbox" name="remember">
        <br>
        <button>Dang nhap</button>

    </form>
</body>

</html>