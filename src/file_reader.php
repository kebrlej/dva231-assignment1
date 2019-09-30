<?php
require_once "Globals.php";

function get_json()
{
    $file = file_get_contents('../news_files/'.Globals::$news_file);
    $news_text = json_decode($file, true);
    return $news_text;
}

function get_file_names()
{
    $files = scandir('../news_files');
    unset($files[0]);
    unset($files[1]);
    return $files;
}
