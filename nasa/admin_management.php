<?php
//check credentials, if not correct, redirect the user
require('../src/session_check.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin login</title>
</head>
<body>
<h1> Please select which news source you want to use:</h1>

<h2>Welcome back <?php echo "".$_SESSION['user_id'];

?>  !!!!!</h2>
<!-- TODO display radio buttons with possible files -->

<form action="../src/login_check.php" method="post">
    <input type="text" name=""><br>
    Password: <input type="password" name="password"><br>
    <input type="submit">
</form>

</body>
</html>