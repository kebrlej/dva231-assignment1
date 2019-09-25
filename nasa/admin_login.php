<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin login</title>
</head>
<body>
<h1> If you are admin please login</h1>


<form action="../src/login_check.php" method="post">
    Username: <input type="text" name="login"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login!">
</form>


</body>
</html>