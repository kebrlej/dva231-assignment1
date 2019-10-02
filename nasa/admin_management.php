<?php
session_start();
//check credentials, if not correct, redirect the user
require('../src/session_check.php');
require("../src/file_reader.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles/admin_style.css">
    <title>Admin login</title>
</head>
<body>
<h1> Please select which news source you want to use:</h1>

<h2>Welcome back <?php echo "" . $_SESSION['user_id']; ?> !!!!!</h2>
<!-- TODO display radio buttons with possible files -->

<form action="../src/change_news_file.php" method="post">
    <?php
    foreach (get_available_news_files() as $filename) {
        echo "<input type='radio' name='newsfile' value='"
            . $filename
            . "'>";
        echo "<label for='"
            . $filename
            . "'>"
            . $filename . "</label><br>";
    }
    ?>

    <input type="submit" value="Set selected NEWS file">
</form>

<?php
// load news_files contents and generate radio buttons, create submit
?>
<form action="../src/logout.php" method="post">
    <input type="submit" value="Logout!">
</form>

</body>
</html>