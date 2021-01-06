<?php
session_start();
// Jeigu neprisijunges
if (!isset($_SESSION['logged']) || 1 != $_SESSION['logged']) {
    header('Location: http://localhost/login/login.php');
    die;
}
?>

<a href="login.php?logout">LOGOUT</a>

<h1>SLAPTAS PUSLAPIS</h1>