<?php require '../check_sp_admin.php' ?>

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
    require '../menu.php';
    ?>
    <form action="process_insert.php" method="post">
        nhap ten: <input type="text" name="name">
        <br>
        nhap email: <input type="text" name="email">
        <br>
        <button>send</button>
    </form>
</body>

</html>