<?php
require_once 'config/db.php';
require_once 'core/function.php';

if (!isLogin()) {
    die('Доступ запрещен');
}

?>

<?php require_once "template/header.php" ?>
<?php
error_reporting(E_ALL & ~E_NOTICE);
if (!empty($_POST)):

    if (!empty($_FILES["img"]['name'])):
        $ext = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
        $fileName = uniqid().".".$ext;
        $uploadFile = __DIR__."/img/".$fileName;
        move_uploaded_file($_FILES['img']['tmp_name'], $uploadFile);
    endif;
    $name = $_POST['name'];
    $slug = $_POST['slug'];
    $img = empty($fileName) ? null : '/img/'.$fileName;
    $price = empty($_POST['price']) ? 0 : $_POST['price'];
    $description = empty($_POST['description']) ? null : $_POST['description'];

    $sql = "INSERT INTO products (name, slug, img, description, price) 
        VALUES ('{$name}', '{$slug}', '{$img}', '{$description}', {$price})";

    $result = mysqli_query($conn, $sql);

endif;
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
            <h1>Создание товара</h1>
            <form class="mb-4" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Название <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="slug">Код <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="slug" name="slug" required>
                </div>
                <div class="form-group">
                    <label for="price">Цена</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="img">Картинка</label>
                    <input type="file" class="form-control-file" id="img" name="img">
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>

</div>
<?php require_once "template/footer.php" ?>
