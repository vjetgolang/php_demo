<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="printInfo.php" method="get">
        Họ và tên:
        <input type="text" name="ten"> <br>
        Nhập ngày sinh:
        <input type="date" name="ngaysinh"> <br>
        Giới tính:
        <input type="radio" name="sex" id="" value="Nam" > Nam 
        <input type="radio" name="sex" id="" value="Nu"> Nữ
        Nhập Email:
        <input type="email" name="email" id=""> <br>
        Nhập mật khẩu:
        <input type="password" name="password" id=""> <br>
        <input type="submit" value="Gửi">
</body>
</html>