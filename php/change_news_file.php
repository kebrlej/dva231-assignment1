<?php
session_start();
if (isset($_POST['newsfile'])) {
    $_SESSION['news_file_name'] = $_POST['newsfile'];
    header('Location: ../html/nasa.php');
} else {
    header('Location: ../html/admin_management.php');
}
