<?php require_once 'config/db.php'; ?>
<?php require_once "template/header.php" ?>
<?php
$query = 'SELECT * FROM `products` WHERE id='.$_GET['id'];
$result = mysqli_query($conn, $query);
$product = mysqli_fetch_array($result);
?>
<div class="container mt-4 mb-5">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid" src="<?= $product['img'] ?>">
        </div>
        <div class="col-md-6">
            <h1><?= $product['name'] ?></h1>
            <p><?= $product['description'] ?></p>
            <h2><?= $product['price'] ?> руб.</h2>
            <form method="POST" action="/core/add-cart.php">
                <div class="input-group mb-3">
                    <input type="number" name="quantity" value="1" class="form-control col-3">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success">Добавить в корзину</button>
                    </div>
                </div>
                <input type="hidden" name="product" value="<?= $product['id'] ?>">
            </form>
            <?php
            $sqlSearchBasket = "SELECT * FROM order_positions WHERE product_id={$product['id']} AND session_id='".session_id()."'";
            $resultSearchBasket = mysqli_query($conn, $sqlSearchBasket);
            if (mysqli_num_rows($resultSearchBasket)) {
                $basketRow = mysqli_fetch_array($resultSearchBasket);
                echo "<p>В корзине: ".$basketRow['quantity']." шт.</p>";
            }
            ?>
        </div>

    </div>
</div>
<?php require_once "template/footer.php" ?>
