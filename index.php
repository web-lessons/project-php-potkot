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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Личный кабинет</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Заказы</a>
                        <a class="dropdown-item" href="#">Профиль</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Выход</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <img src="/img/logo.jpg" class="logo img-fluid m-4">
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

<div class="container">
    <section class="mt-4">
        <div class="row">
            <div class="col-md-9">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/img/slide1.jpg" height="480" alt="Первый слайд">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Метка слайда</h3>
                                <p>Описание</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/slide2.jpg" height="480" alt="Второй слайд">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Метка слайда</h3>
                                <p>Описание</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/slide3.jpg" height="480" alt="Третий слайд">
                            <div class="carousel-caption d-none d-md-block">
                                <h3>Метка слайда</h3>
                                <p>Описание</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="height: auto;">
                    <div class="card-header">
                        Товар недели
                    </div>
                    <img src="/img/duhovka.jpg" height="220px" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="text-center"><a href="#" class="btn btn-primary">Переход куда-нибудь</a></p>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <section class="mt-4">
        <div class="row mb-3">
            <div class="col-md-3">
                <div class="card">
                    <img src="/img/product1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Название товара</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">В корзину</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="/img/product1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Название товара</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">В корзину</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="/img/product1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Название товара</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">В корзину</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="/img/product1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Название товара</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">В корзину</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-3">
                <div class="card">
                    <img src="/img/product1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Название товара</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">В корзину</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="/img/product1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Название товара</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">В корзину</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="/img/product1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Название товара</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">В корзину</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img src="/img/product1.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Название товара</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">В корзину</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<footer style="background-color: #e9ecef;">

    <div class="container pt-4">
        <div class="row">
            <div class="col-md-4">
                <p>Продаем качественный товар</p>
                <p><strong>Адрес:</strong> 4710-4890 Breckinridge St, UK Burlington, VT 05401</p>
                <p><strong>Нужна помощь?</strong> Звони: <a href="tel:1-800-345-6789">1-800-345-6789</a></p>


            </div>
            <div class="col-md-4">
                <div class="widgets_container widget_menu">
                    <h4>Информация</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="#">О нас</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Контакты</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Оплата</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Доставка</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-4">
                <h4>Категории</h4>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="#category1">Категория 1</a></li>
                    <li class="nav-item"><a class="nav-link" href="#category2">Категория 2</a></li>
                    <li class="nav-item"><a class="nav-link" href="#category3">Категория 3</a></li>
                    <li class="nav-item"><a class="nav-link" href="#category4">Категория 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-2 mb-2 text-white">
                    &copy; Магазинус 2020
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>

</footer>
</body>
</html>
