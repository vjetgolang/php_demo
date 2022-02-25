<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Update</title>
</head>
<body>
    <?php 
    $maso = $_GET['ID'];
    require 'env.php';
    $sql = "select * from thongtin where ID=$maso";
    $data = mysqli_query($connect, $sql);
    $dulieu = mysqli_fetch_array($data);
    ?>
    <form action="process_update.php" method="post">
        <input type="hidden" name="ID" value="<?php echo $dulieu['ID']?>">
        Name 
        <input type="text" name="Name" value="<?php echo $dulieu['Name']?>">
        <br>
        Email
        <input type="text" name="Email" value="<?php echo $dulieu['Email']?>">
        <br>
        Link
        <input type="text" name="Link" value="<?php echo $dulieu['Link']?>">
        <br>
        <button>Send</button>
    </form>
</body>
</html>