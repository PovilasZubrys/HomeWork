<?php
if(isset($_GET['color'])) {
    if (1 == $_GET['color']) {
        $backgroundColor = 'black';
    }
    if (2 == $_GET['color']) {
        $backgroundColor = 'white';
    }
    else {
        $backgroundColor = '#' . $_GET['color'];
    }
}
else {
    $backgroundColor = '#000';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND 2</title>
</head>
<style>
    body {
    background: <?= $backgroundColor ?>;
}
    body a {
    color: white;
}
</style>
<body>
<h1>Aloha amigos</h1>
</body>
</html>