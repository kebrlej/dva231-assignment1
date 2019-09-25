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
<?php
// load news_files contents and generate radio buttons, create submit
?>

<form action="../src/logout.php" method="post">
    <input type="submit" value="Logout!">
</form>

</body>
</html>