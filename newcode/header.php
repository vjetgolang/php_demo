<div class="container" style="width: 100%; height: 100px; background-color: red;">
        <a href="index.php">Trang chu</a>
        <?php if (empty($_SESSION['id'])) { ?>
                <a href="signin.php">Dang nhap</a>
                <a href="signup.php">Dang ki</a>
        <?php } else { ?>
                <h3>xin chao, <?php echo $_SESSION['name'] ?></h3>
                <a href="signout.php">Dang xuat</a>
        <?php } ?>
</div>