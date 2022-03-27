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
        require 'connect_sql.php';
        $sql = "select * from user";
        $result = mysqli_query($connect,$sql);
    ?>
    <a href='index.php'>Back</a><br>
    <form action="inserting_process.php" method="post" enctype="multipart/form-data">
        Name
        <input type="text" name="name"><br>
        Unit
        <input type="text" name= "unit"><br>
        Price
        <input type="text" name="price"><br>
        Inventory
        <input type="text" name="inventory"><br>
        Image
        <input type="file" name="image_product"><br>
        User
        <select name="manager">
            <?php foreach($result as $key) {?>
            <option value="<?php echo $key['id'] ?>">
                <?php echo $key['name'] ?>
            </option>
            <?php } ?>
        </select>
        <button>Send</button>
    </form>
</body>
</html>