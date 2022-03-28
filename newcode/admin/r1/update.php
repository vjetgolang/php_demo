<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <?php 
    if(empty($_GET['id'])){
        header('location:index.php?erroll=Bắt buộc nhập id');
    }
    $id= $_GET['id'];
    require '../connect.php';
    $sql = "SELECT * FROM info 
    WHERE id = $id";
    $result= mysqli_query($connect,$sql);
    $sobanghi= mysqli_num_rows($result);
    if($sobanghi==1){
        $each= mysqli_fetch_array($result);
    ?>

    <form action="process_update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $each['id'] ?>">
        nhap ten: <input type="text" name="name" value="<?php echo $each['ten'] ?>">
        <br>
        nhap email: <input type="text" name="email" value="<?php echo $each['email'] ?>">
        <br>
        <button>send</button>
    </form>
    <?php }else{?>
        <h1>Không thể tìm thấy mã này</h1>
   <?php } ?>
</body>
</html>