<?php

function get_json()
{
    $file = file_get_contents('../Ass2News.json');
    $news_text = json_decode($file, true);
    echo $news_text["news"][0]["title"];
}
//echo $file;
