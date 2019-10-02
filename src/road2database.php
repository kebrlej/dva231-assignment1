<?php
require "file_reader.php";
$newsfile = get_available_news_files();
foreach ($newsfile as $file)
{
    $articles = read_news_file_by_name($file)['news'];
    foreach ($articles as $article)
    {
        echo $article['title'];
        echo $article['imgurl'];
        echo $article['content'];
    }
}
