<?php
$db = new mysqli("localhost", "root", "", "assignment3");
if (isset($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])) {

    $query = "SELECT * FROM user_info WHERE (username = '" . $_POST['login'] . "') AND (password ='" . $_POST['password'] . "')";
    $result = $db->query($query);
    if($result -> num_rows > 0)
    {
        echo "IT WORKS !";
    }
    else { echo "NOPE";}
}