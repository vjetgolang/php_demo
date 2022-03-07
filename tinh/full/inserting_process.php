<a href='add_data.php'>Back</a><br>
<?php
    $name= $_POST['name'];
    $unit= $_POST['unit'];
    $price= $_POST['price'];
    $inventory= $_POST['inventory'];

    require 'connect_sql.php';

    $sql= "insert into product(name,unit,price,inventory) 
    values('$name','$unit','$price','$inventory')";
    mysqli_query($connect,$sql);
    echo "Add successful";
?>