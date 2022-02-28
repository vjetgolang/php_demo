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
    $id=$_POST['id'];
    $name=$_POST['name'];
    $mail=$_POST['mail'];
    $link=$_POST['link'];
    require 'connect.php';
    $sql="update sv set Ten='$name',Mail='$mail',Link='$link' where ID=$id";
    $dulieu=mysqli_query($connect, $sql);
    mysqli_close($connect);
    ?>
    <?php
    echo "$id <br> $name <br> $mail <br>";
    echo '<img src="'.$link.'" alt="">';

    ?>
    
</body>
</html>