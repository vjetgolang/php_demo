<?php

$yourname = $_POST['fullname'];
$your_email = $_POST['email'];
$your_password = $_POST['password'];
$your_file = $_POST['file'];

//Connect database
$con = mysqli_connect("localhost","root","","manage_info");

mysqli_set_charset($con, 'utf8');

// //Check connect
// if(mysqli_connect_error()){
//     echo "Faile to connect to manage_info database!" . mysqli_connect_error();
// }



//Perform queries

$sql_queries = "insert into info_of_person(name,email,password,file)
values('$yourname','$your_email','$your_password','$your_file')";
mysqli_query($con,$sql_queries);

echo "Create your account is succeed!<br>";
echo '<img src="'.$your_file.'" alt="">';

?>