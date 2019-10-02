<?php
session_start();
if (isset($_POST['newsfile'])) {
    $_SESSION['news_file_name'] = $_POST['newsfile'];
    header('Location: ../nasa/nasa.php');
} else {
    header('Location: ../nasa/admin_management.php');
}
