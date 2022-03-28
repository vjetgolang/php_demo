<?php
    $id= $_POST['id'];
    $photo_new= $_FILES['photonew'];

    //print_r($photo_new);
    if($photo_new['size'] > 0){
            $folder= "photo/";
            $extension_file= explode(".",$photo_new["name"])[1];
            $path_file= $folder . time() . "." . $extension_file;
            move_uploaded_file($photo_new["tmp_name"], $path_file);
        
    } else{
        $path_file = $_POST['photo_old'];
    }
    $name = $_POST['name'];
    $price = $_POST['price'];
    //$photoold= $_POST['photo_old'];
    $manager = $_POST['manager'];
    //print_r($photo);
    // $folder = "photo/";
    // $path_file = $folder . basename($photo["name"]);
    // //die($path_file);
    // move_uploaded_file($photo["tmp_name"], $path_file)

    echo "$id,$name,$price,$path_file,$manager";

    
    // die($path_file);
    require "../connect.php";
    $sql= "update product 
    set 
    nameproduct='$name',
    price='$price',
    photo='$path_file',
    user_id='$manager' 
    where 
    id='$id'";
    mysqli_query($connect,$sql);
    header("location:index.php");
    mysqli_close($connect);

?>