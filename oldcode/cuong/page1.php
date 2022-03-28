<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="page2.php" method="post">
        Nhập tên:
        <input type="text" name="ten"> <br>
        Ngày tháng năm sinh: 
        <input type="date" name="ngaysinh"> <br>
        Giới tính:
        <input type="radio" name="sex" id="" value="Nam" > Nam 
        <input type="radio" name="sex" id="" value="Nu"> Nữ
        <input type="radio" name="sex" id="" value="Khac"> Khác<br>
        Email:
        <input type="email" name="email" id=""> <br>
        Nhập mật khẩu:
        <input type="password" name="password" id=""> <br>
        <input type="submit" value="Gửi">
    </form>
</body>
</html>