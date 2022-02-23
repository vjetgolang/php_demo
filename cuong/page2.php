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
        $ten = $_POST['ten'];
        $idfb = $_POST['idfb'];
        $email = $_POST['email'];
        $link = $_POST['link'];
        $idol = $_POST['idol'];
    
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, "profile");

        //support utf8(khong loi phong)
        mysqli_set_charset($conn,'utf8');    

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";

        $insert = "insert into content(Name, IdFB, Email, Link, Idol)
                    values('$ten', '$idfb', '$email', '$link', '$idol')";
        mysqli_query($conn, $insert);
        
    ?>

    <?php 
        $select = "select * from content";
        $data = mysqli_query($conn, $select);
    ?>

    <table border="1">
        <tr>
            <th>Id</th>
            <th>Tên</th>
            <th width=100px>Avatar</th>
        </tr>
        <?php 
            foreach($data as $item) { ?> 

                <tr>
                    <td><?php echo $item['Id']?></td>
                    <td><a href="detail.php?id=<?php echo $item['Id']?>"><?php echo $item['Name']?></a></td>
                    <td><img src="<?php echo $item['Link']?>" alt=""></td>
                </tr>

                
            <?php }
        ?>
    </table>
</body>
</html>