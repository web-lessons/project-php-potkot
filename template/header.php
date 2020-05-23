<?php
require_once 'config/db.php';
require_once 'core/function.php';
if (!empty($_POST['login']) and !empty($_POST['password'])) {
    login($_POST['login'], $_POST['password'], $conn);
}

//Мини корзина
$countProductSql = "SELECT SUM(quantity) AS COUNT FROM order_positions WHERE session_id='".session_id()."'";
$result = mysqli_query($conn, $countProductSql);

if (!$result) {
    echo $countProductSql;
    echo mysqli_error($conn);
    die;
}

$count = mysqli_fetch_array($result);

//Полная корзина
$sqlFullCart = "SELECT p.name, p.img, op.quantity, op.price, (op.quantity*op.price) AS sum
FROM order_positions op 
JOIN products p ON op.product_id = p.id
WHERE op.session_id='".session_id()."'";

$result = mysqli_query($conn, $sqlFullCart);

if (!$result) {
    echo $countProductSql;
    echo mysqli_error($conn);
    die;
}

$products = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Мой магазин</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/site.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Корзина</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Название</th>
                            <th>Кол-во</th>
                            <th>Цена</th>
                            <th>Сумма</th>
                        </tr>
                    </thead>
                    <?php foreach ($products as $key => $product): ?>
                        <tr>
                            <td>
                                <img class="img-fluid" src="<?= $product['img'] ?>">
                            </td>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['quantity'] ?></td>
                            <td><?= $product['price'] ?></td>
                            <td><?= $product['sum'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <a href="/order.php" class="btn btn-primary">Оформить заказ</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5 d-none d-md-block">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">О магазине</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Доставка</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Оплата</a>
                </li>
            </ul>
        </div>
        <div class="col-md-3 d-none d-md-block">
            <p class="phone"><a href="tel:88002000600">8-800-2000-600</a></p>
        </div>
        <div class="col-md-4 d-none d-md-block">
            <ul class="nav justify-content-end">
                <?php
                if ($count['COUNT'] > 0) {
                    echo "<li class=\"nav-item\"><a href='#' class=\"nav-link\" data-toggle=\"modal\" data-target=\"#staticBackdrop\">Корзина ({$count['COUNT']})</a></li>";
                }
                ?>
                <?php if (isLogin()): ?>
                    <li class="nav-item"><a class="nav-link" href="/admin/">Админка</a></li>
                    <li class="nav-item"><a class="nav-link" href="/logout.php">Выход</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="/login.php">Войти</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-9 text-center">
            <a href="/"><img src="/img/logo.jpg" class="logo img-fluid m-4"></a>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <div class="container">
        <ul class="navbar-nav justify-content-between">
            <li class="nav-item">
                <a class="nav-link" href="#">Телефоны</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Телевизоры</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Компьютеры</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Пылесосы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Духовки</a>
            </li>
        </ul>
    </div>
</nav>
