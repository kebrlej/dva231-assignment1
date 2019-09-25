<?php

function get_json()
{
    $file = file_get_contents('../Ass2News.json');
    $news_text = json_decode($file, true);
    return $news_text;
}
//echo $file;
