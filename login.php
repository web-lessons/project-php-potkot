<?php require_once 'config/db.php'; ?>
<?php require_once 'core/function.php'; ?>
<?php require_once "template/header.php" ?>
<?php
if (!empty($_POST['login']) && !empty($_POST['password'])):
    login($_POST['login'], $_POST['password'], $conn);
endif;
?>
<div class="container">
    <section class="mt-4">
        <div class="row justify-content-md-center mb-4">
            <div class="col-md-6">
                <?php if (isLogin()): ?>
                    <h2 class="mb-5 mt-5">Вы успешно вошли на сайт</h2>
                <?php else: ?>
                    <form method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="login">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Пароль</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Войти</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>
<?php require_once "template/footer.php" ?>
