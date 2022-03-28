<?php
    $name = $_POST['name'];
    $price = $_POST['price'];
    $photo= $_FILES['photo'];
    $manager = $_POST['manager'];
    print_r($photo);
    // $folder = "photo/";
    // $path_file = $folder . basename($photo["name"]);
    // //die($path_file);
    // move_uploaded_file($photo["tmp_name"], $path_file)



    $folder= "photo/";
    $extension_file= explode(".",$photo["name"])[1];
    $path_file= $folder . time() . "." . $extension_file;
    move_uploaded_file($photo["tmp_name"], $path_file);
    // die($path_file);
    require "../connect.php";
    $sql= "INSERT INTO product(nameproduct,price,photo,user_id)
    VALUES ('$name','$price','$path_file','$manager')";
    mysqli_query($connect,$sql);
    header("location:index.php");
    mysqli_close($connect);

?>