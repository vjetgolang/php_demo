<?php echo '<ul>
<li><a href="../r1">r1</a></li>
<li><a href="../r2">r2</a></li>
<li><a href="../r3">r3</a></li>
</ul>';
 ?>
 <?php if(isset($_GET['success'])){?>
        <span style='color:green'>
            <?php echo $_GET['success'] ?>
        </span>
    <?php } ?>
    <?php if(isset($_GET['erroll'])){?>
        <span style='color:red'>
            <?php echo $_GET['erroll'] ?>
        </span>
    <?php } ?>


