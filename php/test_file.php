<?php
require "database_article_provider.php";
$newArticle = get_three_newest_articles();
echo json_encode($newArticle);
