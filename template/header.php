<?php
require_once 'core/function.php';
if (!empty($_POST['login']) AND !empty($_POST['password'])) {
    login($_POST['login'], $_POST['password'], $conn);
}
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

<div class="container">
    <div class="row">
        <div class="col-md-6 d-none d-md-block">
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
        <div class="col-md-3 d-none d-md-block">
            <ul class="nav justify-content-end">
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
        <div class="col-md-12 text-center">
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
