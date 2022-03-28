<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="get_value.php" method="get">
        Họ và tên
        <input type="text" name="name">
        <br>
        
        Giới tính
        <input type="radio" name="gender" id="nam"value ="Nam">Nam
        <input type="radio" name="gender" id="nu"value ="Nu">Nu
        <br>
        Ngày sinh
        <input type="date" name="birthday">
        <br>
        Email
        <input type="email" name="email">
        <br>
        Password
        <input type="password" name ="pass">
        <button>send</button>
    </form>
    
</body>
</html>