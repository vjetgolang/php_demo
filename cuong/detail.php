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
        $id = $_GET['id'];
        $connect= mysqli_connect('localhost','root','','profile');
        mysqli_set_charset($connect,'utf8');
        $sql= "select * from content where id=$id";
        $data= mysqli_query($connect,$sql);
        $item= mysqli_fetch_array($data);
    ?>


    <div style="display: flex; font-size: 40px" >
        <div>
            <img src="<?php echo $item['Link']?>" alt="">
        </div>
        <div>
            Tên:
            <?php echo $item['Name']?> <br>
            FB:
            <a target="blank" href="https://www.facebook.com/<?php echo $item['IdFB']?>"><?php echo $item['IdFB']?></a> <br>
            Email:
            <?php echo $item['Email']?> <br>
            Idol:
            <a target="blank" href="https://www.google.com/search?q=<?php echo $item['Idol']?>"><?php echo $item['Idol']?></a>

        </div>
    </div>

</body>
</html>