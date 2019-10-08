<?php
session_start();
$db = new mysqli("localhost", "root", "", "assignment3");
if (isset($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])) {

    $query = "SELECT * FROM user_info WHERE (username = '" . $_POST['login'] . "') AND (password ='" . $_POST['password'] . "')";
    $result = $db->query($query);
    if ($result->num_rows > 0) {
        $_SESSION['login-error'] = false;
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $_POST['login'];
        $_SESSION['user_id'] = $_POST['password'];
        header('Location: ../html/admin_management.php');
    } else {
        $_SESSION['login-error'] = true;
        header('Location: ../html/admin_login.php');

    }
    // user entered valid credentials, redirect to management page

} else {
    $_SESSION['login-error'] = true;
    header('Location: ../html/admin_login.php');
}

