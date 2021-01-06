<?php
if(isset($_GET['color'])) {
    if (1 == $_GET['color']) {
        $backgroundColor = 'red';
    }
    if (2 == $_GET['color']) {
        $backgroundColor = 'white';
    }
}
else {
    $backgroundColor = 'black';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND 1</title>
</head>
<style>
    body {
    background: <?= $backgroundColor ?>;
    color: #fff;
}
    body a {
    color: #fff;
}
</style>
<body>
    <a href="?color=1">MAKE RED</a>
    <a href="?color=2">MAKE WHITE</a>
    <a href="?">MAKE BLACK</a>
</body>
</html>