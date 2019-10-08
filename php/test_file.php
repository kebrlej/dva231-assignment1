<?php

$_GET['searchphrase'];

require "database_article_provider.php";
$newArticle = search_article_by_title($_GET['searchphrase']);

echo json_encode($newArticle);
