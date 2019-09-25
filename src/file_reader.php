<?php

function get_json()
{
    $file = file_get_contents('../news_files/Ass2News.json');
    $news_text = json_decode($file, true);
    return $news_text;
}
