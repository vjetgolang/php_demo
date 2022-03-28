<a href='add_data.php'>Back</a><br>

<?php

    $name= $_POST['name'];
    $unit= $_POST['unit'];
    $price= $_POST['price'];
    $inventory= $_POST['inventory'];
    $image = $_FILES['image_product'];
    $user = $_POST['manager'];

    require 'connect_sql.php';  
    
    $folder= "image/";
    $extension_file= explode(".",$image["name"])[1];
    $path_file= $folder . time() . "." . $extension_file;
    move_uploaded_file($image["tmp_name"], $path_file);
    //die($path_file);

    $sql= "insert into product(name,unit,price,inventory,image,user_id) 
    values('$name','$unit','$price','$inventory','$image','$user')";
    mysqli_query($connect,$sql);
    header("location: index.php");

?>