<?php

session_start();

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

$_SESSION['contador']++;

echo "Número de accesos a esta página " . $_SESSION['contador'];
?>