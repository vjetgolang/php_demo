<?php
    $name=addslashes($_POST['name']);
    $email=addslashes($_POST['email']);
    $password=addslashes($_POST['password']);

    require 'admin/connect.php';
    $sql = "select count(*) from customer where email='$email'";
    session_start();
    $_SESSION["name"] = $name;
    die($_SESSION["name"]);
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result)['count(*)'];
    echo $row;
    if($row==1)
    {
        header('location:signup.php');
        exit;
    }
    $sql = "INSERT INTO customer(name,email,password)
    VALUES ('$name','$email','$password')";
    mysqli_query($connect,$sql);

    mysqli_close($connect);
    header('location:index.php');

?>