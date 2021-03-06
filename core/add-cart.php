<?php
session_start();
include_once __DIR__.'/../config/db.php';

if (!empty($_POST)) {
    $quantity = empty($_POST['quantity']) ? 1 : (int)$_POST['quantity'];
    $productId = empty($_POST['product']) ? false : (int)$_POST['product'];

    if ($productId === false) {
        die("Перменная product не должна быть пустой");
    }

    $sessionId = session_id();

    /**
     * Провеили есть ли такой товар
     */
    $query = 'SELECT * FROM `products` WHERE id='.$productId;
    $result = mysqli_query($conn, $query);
    $product = mysqli_fetch_array($result);

    if ($product) {

        $sqlSearchBasket = "SELECT * FROM order_positions WHERE product_id={$productId} AND session_id='{$sessionId}'";
        $resultSearchBasket = mysqli_query($conn, $sqlSearchBasket);

        if (!$resultSearchBasket) {
            echo $sqlSearchBasket;
            echo mysqli_error($conn);
            die;
        }

        if (mysqli_num_rows($resultSearchBasket) > 0) {
            $basketRow = mysqli_fetch_array($resultSearchBasket);
            $sqlEditCart = "UPDATE order_positions SET quantity=".($quantity + $basketRow['quantity'])." 
              WHERE id={$basketRow['id']}";
        } else {
            $sqlEditCart = "INSERT INTO order_positions 
                   (session_id, product_id, quantity, price) 
                     VALUE ( '{$sessionId}', {$productId}, {$quantity}, {$product['price']})";
        }

        $result = mysqli_query($conn, $sqlEditCart);

        if ($result) {
            header("Location: {$_SERVER['HTTP_REFERER']}");
        } else {
            echo mysqli_error($conn);
            die;
        }
    }

}