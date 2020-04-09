<?php require_once __DIR__."/../../config/db.php"; ?>
<?php require_once __DIR__."/../template/header.php" ?>
<?php
$query = 'SELECT * FROM `products`';
$result = mysqli_query($conn, $query);
$products = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Список товаров</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>

        <? foreach ($products as $product): ?>
            <tr>
                <th scope="row"><?= $product['id'] ?></th>
                <td><a href="/admin/products/create.php?id=<?= $product['id'] ?>"><?= $product['name'] ?></a></td>
                <td></td>
                <td></td>
            </tr>
        <? endforeach; ?>

        </tbody>
    </table>

<?php require_once __DIR__."/../template/footer.php" ?>