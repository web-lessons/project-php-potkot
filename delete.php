<?php

require_once "config/db.php";
$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id=".$id;
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: {$_SERVER['HTTP_REFERER']}");
} else {
    echo mysqli_error($conn);
}