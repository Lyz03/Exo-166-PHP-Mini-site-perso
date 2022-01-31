<?php
if (isset($_POST['submit'])) {

    if (!isset($_POST['username']) || !isset($_POST['password'])) {
        header('Location: /index.php?page=connection');
        exit();
    }

    if (empty($_POST['username']) || empty($_POST['password'])) {
        header('Location: /index.php?page=connection');
        exit();
    }

    $username = trim(strip_tags($_POST['username']));
    $password = strip_tags($_POST['password']);

    // is it an admin account
    if ($username === 'admin' && $password === '0000') {
        setcookie('role', 'admin');
        header('Location: /admin.php');
        exit();
    } else {
        setcookie('role', 'client');
        header('Location: /index.php');
        exit();
    }

} else {
    header('Location: /index.php');
}