<?php
if (isset($_GET['need_redirect']) && 'true' == $_GET['need_redirect']) {
    header('Location: http://localhost/form/red.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
    background: blue;
}
a {
    color: white;
}
</style>
<body>
    <a href="?need_redirect=true">BLUEDABUDYDABUDA</a>
</body>
</html>