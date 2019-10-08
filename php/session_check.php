<?php


if(!isset($_SESSION['user_id'])){
    header('Location: ../nasa/admin_login.php');
}