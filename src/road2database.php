<?php
require "file_reader.php";
$db = new mysqli("localhost", "root", "", "assignment3");
if ($db->connect_errno) {
    die("Could not connect: " . mysqli_connect_error());
}/* create a prepared statement and bind */


$newsfile = get_available_news_files();
foreach ($newsfile as $file) {
    $articles = read_news_file_by_name($file)['news'];
    foreach ($articles as $article) {
        /*echo $article['title'];
        echo $article['imgurl'];
        echo $article['content'];*/
        
    }
}
$db->close();