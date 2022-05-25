<?php
session_start();
// cách 1
// if (isset($_SESSION['level'])&& $_SESSION['level']===1) {
//     header("Location:../index.php");
// }
// cách 2
if (empty($_SESSION['level'])) {
    header("Location:../index.php");
}
