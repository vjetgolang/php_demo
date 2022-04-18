<style>
    .product {
        width: 25%;
        height: 300px;
        background-color: #ccc;
        float: left;
    }
</style>
<?php
require 'admin/connect.php';
$sql = "SELECT product.*, info.ten
    FROM product
    JOIN info ON product.user_id = info.id";

$result = mysqli_query($connect, $sql);
// $data= mysqli_fetch_array($result);
?>
<div class="productlist">
    <?php foreach ($result as $key) { ?>
        <div class="product">
            <div class="product-img">
                <img src="admin/r2/<?php echo $key['photo'] ?>" height="100px" />
            </div>
            <div class="product-info">
                <div class="product-name">
                    <?php echo $key['nameproduct'] ?>
                </div>
                <div class="product-price">
                    <?php echo $key['price'] ?>
                </div>
                <div class="product-user">
                    <?php echo $key['ten'] ?>
                </div>
                <div>
                    <a href="detailproduct.php?id=<?php echo $key['id'] ?>">Chi tiet</a>
                </div>
                <?php if (isset($_SESSION['id'])) { ?>
                    <div>
                        <a href="addcart.php?id=<?php echo $key['id'] ?>">Add to cart</a>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>