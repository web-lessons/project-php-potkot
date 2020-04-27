<?php
require_once __DIR__."/../template/header.php";

if (!isLogin()) {
    die('Доступ запрещен');
}
?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
if (!empty($_POST)):

    if (!empty($_FILES["img"]['name'])):
        $ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
        $fileName = uniqid().".".$ext;
        $uploadFile = __DIR__."/../../img/".$fileName;
        move_uploaded_file($_FILES['img']['tmp_name'], $uploadFile);
    endif;

    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $img = empty($fileName) ? null : '/img/'.$fileName;
    $price = empty($_POST['price']) ? 0 : $_POST['price'];
    $description = empty($_POST['description']) ? null : $_POST['description'];

    if (!empty($_POST['id'])):

        $addImg = "img='{$img}', ";

        if (empty($img)) {
            $addImg = "";
        }

        $sql = "UPDATE products 
                 SET name='{$name}', slug='{$slug}', ".$addImg."  description='{$description}', price={$price} 
                 WHERE id=".$_POST['id'];
    else:
        $sql = "INSERT INTO products (name, slug, img, description, price) 
        VALUES ('{$name}', '{$slug}', '{$img}', '{$description}', {$price})";
    endif;

    $result = mysqli_query($conn, $sql);
endif;

if (!empty($_GET['id'])) {
    $sql = "SELECT * FROM products WHERE id=".$_GET['id'];

    $result = mysqli_query($conn, $sql);

    if ($result === false) {
        die("Ошибка сервера");
    }

    $product = mysqli_fetch_array($result);
}
?>
<div class="container">
    <? if (!empty($_POST)): ?>
        <? if ($result): ?>
            <div class="alert alert-success mt-4" role="alert">
                Успешно создана новая запись.
            </div>
        <? else: ?>
            <div class="alert alert-danger mt-4" role="alert">
                Ошибка: <?php echo $sql; ?><br><?php echo mysqli_error($conn); ?>
            </div>
        <? endif; ?>
    <? endif; ?>

    <div class="row">
        <div class="col-md-6">
            <h1>Редактирование товара</h1>
            <form class="mb-4" method="post" enctype="multipart/form-data">
                <? if (!empty($product)): ?>
                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                <? endif; ?>
                <div class="form-group">
                    <label for="name">Название <span class="text-danger">*</span></label>
                    <input type="text" <?= empty($product) ? "" : "value='".$product['name']."'" ?> class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="slug">Код <span class="text-danger">*</span></label>
                    <input type="text" <?= empty($product) ? "" : "value='".$product['slug']."'" ?> class="form-control" id="slug" name="slug" required>
                </div>
                <div class="form-group">
                    <label for="price">Цена</label>
                    <input type="number" <?= empty($product) ? "" : "value='".$product['price']."'" ?> class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <? if (!empty($product['img'])): ?>
                        <img class="img-thumbnail" width="150px;" src="<?= $product['img'] ?>"><br>
                    <? endif; ?>
                    <label for="img">Картинка</label>
                    <input type="file" class="form-control-file" id="img" name="img">
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea class="form-control" id="description" rows="3" name="description"><?= empty($product) ? "" : $product['description'] ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>

</div>
<?php require_once __DIR__."/../template/footer.php" ?>
