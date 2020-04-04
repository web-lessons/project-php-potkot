<?php
session_start();

function login($login, $password, $conn)
{
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email='{$login}' AND password='{$password}'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows == 1) {
        $authUser = mysqli_fetch_array($result);

        $_SESSION['id'] = $authUser['id'];
        $_SESSION['name'] = $authUser['name'];

        return true;
    } else {
        return false;
    }
}

function logout()
{
    session_destroy();
    return true;
}

function isLogin()
{
    if (!empty($_SESSION['id'])) {
        return true;
    } else {
        return false;
    }
}