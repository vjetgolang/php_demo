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
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $link = $_POST['link'];
        $connect = mysqli_connect('localhost', 'root', '', 'qlkh');
        mysqli_set_charset($connect, 'utf8');
        $sql = "insert into information(Name, Email, Link)
        values('$name', '$mail', '$link')";
        mysqli_query($connect, $sql);
        echo("Thanh cong <br> $name <br> $mail <br> $link <br>");
        echo'<img src="'.$link.'" alt="">'
    ?>
</body>
</html>