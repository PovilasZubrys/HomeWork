<?php
session_start();
// Jeigu neprisijunges
if (isset($_GET['logout'])) {
    $_SESSION['logged'] = 0;
    header('Location: http://localhost/login/login.php');
    die;
}
// Jeigu jau prisijunges
if (isset($_SESSION['logged']) || 1 == $_SESSION['logged']) {
    die('Prisijunges');
}
// Jungiames
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('data.json'), 1);
    foreach($data as $user) {
        if(($_POST['email'] ?? '') === $user['email'] && 
           md5($_POST['pass'] ?? '') === $user['pass']) {
               $_SESSION['name'] = $user['name'];
               $_SESSION['logged'] = 1;
               header('Location: http://localhost/login/page.php');
               die;
           }
    }
    // Jeigu blogas prisijungimas
    $_SESSION['msg'] = 'Bad email or password';
    header('Location: http://localhost/login/login.php');
    die;
}
// Pranesimas
if(isset($_SESSION['msg'])) {
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div> <?= $msg ?? '' ?> </div>
    <form action="" method="POST">
    Email:<br>
    <input type="text" name="email">
    <br>
    Password:<br>
    <input type="password" name="pass">
    <br><br>
    <input type="submit" value="Login">
    </form>
</body>
</html>