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
            <button class="btn btn-success">Купить</button>
        </div>
    </div>
</div>
<?php require_once "template/footer.php" ?>
