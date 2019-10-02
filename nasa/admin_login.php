<?php
session_start();
if (isset($_SESSION['user_id'])) {
    // user is already logged in, redirect to management page
    header('Location: ../nasa/admin_management.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="styles/login_style.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/nasa-logo.png"/>
</head>
<body>
<h1> If you are admin please login</h1>


<form action="../src/login_check.php" method="post">
    Username: <input type="text" name="login"><br>
    Password: <input type="password" name="password"><br>
    <input class ="login-button"type="submit" value="Login!">
</form>


</body>
</html>