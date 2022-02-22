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
    $connect=mysqli_connect('localhost','root','','qlsv');
    mysqli_set_charset($connect,'utf8');
    $sql="select * from sv where ID=$id";
    $data=mysqli_query($connect,$sql);
    $dong= mysqli_fetch_array($data);
    ?>
     <h1><?php echo $dong['ID'] ?></h1>
     <h1><?php echo $dong['Ten'] ?></h1>
     <h1><?php echo $dong['Mail'] ?></h1>
     <h1><?php echo $dong['Link'] ?></h1>
</body>
</html>