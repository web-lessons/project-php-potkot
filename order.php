<?php require_once "template/header.php" ?>
<div class="container mt-4 mb-5">
    <div class="row">
        <div class="col">
            <h2>Оформление заказа</h2>
        </div>
    </div>
    <div class="row">
        <?php if (isLogin()): ?>
            <div class="col-5">
                <form method="post" action="/core/create-order.php">
                    <div class="form-group">
                        <label>Дата доставки <span class="text-danger">*</span></label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Комментарий к заказу</label>
                        <input type="text" name="comment" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Адрес</label>
                        <textarea name="address" class="form-control"></textarea>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" value="1" name="delivery">
                        <label class="form-check-label" for="exampleCheck1">Доставить курьером</label>
                    </div>
                    <p class="mb-0">Способ оплаты <span class="text-danger">*</span></p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pay" id="exampleRadios1" value="cash" required>
                        <label class="form-check-label" for="exampleRadios1">
                            Наличными
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pay" id="exampleRadios2" value="card" required>
                        <label class="form-check-label" for="exampleRadios2">
                            Картой
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Оформить заказ</button>
                </form>
            </div>
            <div class="col-7">
                <? $totalSum = 0; ?>
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
                                <img class="img-fluid" src="<?= $product['img'] ?>" width="80px">
                            </td>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['quantity'] ?></td>
                            <td><?= number_format($product['price'], 0, '', ' ') ?></td>
                            <td><?= number_format($product['sum'], 0, '', ' ') ?></td>
                        </tr>
                        <?
                        $totalSum += $product['sum'];
                        ?>
                    <?php endforeach; ?>
                </table>
                <h2>Итого: <strong><?= number_format($totalSum, 0, '', ' '); ?></strong></h2>
            </div>
        <?php else: ?>
            <form method="post" action="">
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

<?php require_once "template/footer.php" ?>
