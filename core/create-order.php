<?php
session_start();
include_once __DIR__.'/../config/db.php';

if (!empty($_POST)) {

    $date = $_POST['date'];
    $comment = empty($_POST['comment']) ? "" : trim($_POST['comment']);
    $address = empty($_POST['address']) ? "" : trim($_POST['address']);
    $delivery = empty($_POST['delivery']) ? 0 : 1;
    $pay = $_POST['pay'];
    $userId = $_SESSION['id'];

    $sql = "";

}