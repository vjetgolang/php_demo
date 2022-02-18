<?php
    function format($ten, $email, $link) {
        echo '
        <div style="display: flex">
            <div>
                <img src="'.$link.'" alt="">
            </div>
            <div style="font-size: 40px">
                Tên: '.$ten.'<br> 
                Email: '.$email.'
            </div>
        </div>
        ';
    }

    // get data
    $ten = $_POST['ten'];
    $email = $_POST['email'];
    $link = $_POST['link'];
    // init
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "qlsv";
    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, 'utf8');
    //
    $insert = "insert into infor(Name, Email, Link)
                values('$ten', '$email', '$link')";
    $select = "select * from infor";
    if ($conn->query($insert) === TRUE) {
        $result = $conn->query($select);
        while ($row = $result->fetch_assoc())
            format($row['Name'], $row['Email'], $row['Link']);
    }

    
?>