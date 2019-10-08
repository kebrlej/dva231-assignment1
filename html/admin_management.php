<?php
session_start();
//check credentials, if not correct, redirect the user
require('../php/session_check.php');
require("../php/file_reader.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../styles/admin_style.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/nasa-logo.png"/>
    <title>Admin login</title>
</head>
<body>
<h1> Please select which news source you want to use:</h1>

<h2>Welcome back <?php echo "" . $_SESSION['username']; ?> !!!!!</h2>
<!-- TODO display radio buttons with possible files -->

<form action="../php/change_news_file.php" method="post">
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
<form action="../php/logout.php" method="post">
    <input type="submit" value="Logout!">
</form>

</body>
</html>