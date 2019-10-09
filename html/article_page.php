<?php
require "../php/database_article_provider.php";

$article = get_article_by_id(1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Article</title>
    <link rel="stylesheet" type="text/css" href="../styles/article_style.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../img/nasa-logo.png"/>
</head>
<body>
<div class = content>
    <h1>
        <?php echo $article['title'] ?>
    </h1>
    <img src="<?php echo $article['imgurl']; ?>">
    <p>
        <?php echo $article['content'];?>
    </p>
    <a href="nasa.php">Back to main page</a>
</div>


</body>
</html>