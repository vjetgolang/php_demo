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
    $id=$_GET['id'];
    require 'connect.php';
    $sql= "select * from sv where ID=$id";
    $data= mysqli_query($connect,$sql);
    $dulieu= mysqli_fetch_array($data);

    ?>
<form action="updateSql.php" method="post">
    <input type="hidden" name="id" value="<?php echo $dulieu['ID']?>">
        Ten:
        <input type="text" name="name" value="<?php echo $dulieu['Ten']?>">
        <br>
        Mail:
        <input type="text" name="mail" value="<?php echo $dulieu['Mail']?>">
        <br>
        Link avatar:
        <input type="text" name="link" value="<?php echo $dulieu['Link']?>">
        <br>
        <button>Send</button>
    </form>
</body>
</html>