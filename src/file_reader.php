<?php

function read_news_file_by_name($filename){
    return json_decode(file_get_contents('../news_files/' . $filename), true);
}

function get_news_file_as_object()
{
    if (!isset($_SESSION['news_file_name'])) {
        $_SESSION['news_file_name'] = "Ass2News.json";
    }

    return json_decode(file_get_contents('../news_files/' . $_SESSION['news_file_name']), true);
}

function get_available_news_files()
{
    $files = scandir('../news_files');
    unset($files[0]);
    unset($files[1]);
    return $files;
}
