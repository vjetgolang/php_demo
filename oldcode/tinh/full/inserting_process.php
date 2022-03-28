<?php
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $image= $_POST['image'];

    require 'connect_sql.php';

    $sql= "insert into person(name,email,password,image) 
    values('$name','$email','$password','$image')";
    mysqli_query($connect,$sql);
    echo "Add successful $name, $email, $password, $image";




?>