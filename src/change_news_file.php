<?php
require_once "Globals.php";
session_start();

if (isset($_POST['newsfile'])) {
    $new_filename = $_POST['newsfile'];
    Globals::$news_file = $new_filename;
    header('Location: ../nasa/nasa.php');
} else {
    header('Location: ../nasa/admin_management.php');
}
//echo Globals::$news_file;
//echo $new_filename;