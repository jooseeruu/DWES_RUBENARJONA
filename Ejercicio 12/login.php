<?php
session_start();
$users = ["user1" => "1234", "user2" => "4321"];
$username = $_POST["username"];
$password = $_POST["password"];
if (isset($users[$username]) && $users[$username] === $password) {
    $_SESSION['username'] = $username;
    header('Location: intranet.php');
    exit;
} else {
    $_SESSION['message'] = 'Invalid fields!';
    header('Location: index.php');
    exit;
}

?>