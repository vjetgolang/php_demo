<?php 
$ma= $_GET['id'];
require 'envsql.php';
$sql= "delete from data where id=$ma";
mysqli_query($connect,$sql);
mysqli_close($connect);


echo $ma;



?>