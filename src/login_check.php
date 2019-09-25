<?php
session_start();

//if (isset($_SESSION['user_id'])) {
//    // user is already logged in, redirect to management page
//    header('Location: ../nasa/admin_management.php');
//} else
if (isset($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])) {
    // user entered valid credentials, redirect to management page
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['username'] = $_POST['login'];
    $_SESSION['user_id'] = $_POST['password'];
    header('Location: ../nasa/admin_management.php');
} else {
    header('Location: ../nasa/admin_login.php');
}

