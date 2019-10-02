<?php
require "file_reader.php";
$db = new mysqli("localhost", "root", "", "assignment3");
if ($db->connect_errno) {
    die("Could not connect: " . mysqli_connect_error());
}/* create a prepared statement and bind */

$title = "Big title";
$imgurl = "some url";
$content = "Nice content";

$statement = $db->prepare("INSERT INTO news_article(title,imgurl,content) VALUES (?,?,?)");
$statement->bind_param("sss", $title, $imgurl, $content);

foreach (get_available_news_files() as $file) {
    $articles = read_news_file_by_name($file)['news'];
    foreach ($articles as $article) {
        $title = $article['title'];
        $imgurl = $article['imgurl'];
        $content = $article['content'];
        $statement->execute();
    }
}


$statement->close();
$db->close();