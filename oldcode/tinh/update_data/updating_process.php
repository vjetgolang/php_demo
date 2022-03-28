<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ma= $_POST['id'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $image= $_POST['image'];
    require 'connect_sql.php';
    $sql= "update person set name='$name',email='$email',password='$password',image='$image' where id=$ma";
    $data= mysqli_query($connect,$sql);
    mysqli_close($connect);
    ?>
    <?php
    echo "$ma<br>$name<br>$email<br>$password<br>$image";
    
    ?>
</body>
</html>