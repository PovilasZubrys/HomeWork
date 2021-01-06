<?php
if (isset($_GET['color'])) {
    if (1 == $_GET['color']) {
        $backgroundColor = '#ff0000';
    }
    if (2 == $_GET['color']) {
        $backgroundColor = '#0000ff';
    }
    else {
        $backgroundColor = $_GET['color'];
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
    <title>3</title>
</head>
<style>
body {
    background: <?= $backgroundColor ?>;
}
body a {
    color: #777;
}
</style>
<body>    
    <a href="http://localhost/form/3.php?color=1">MAKE RED</a>
    <a href="http://localhost/form/3.php?color=2">MAKE BLUE</a>
    <a href="http://localhost/form/3.php">MAKE BLACK</a>

    <form action="http://localhost/form/3.php" method="get">
    <input type="color" name="color">
    <button type="submit" value="123">SET COLOR</button>
    </form>
</body>
</html>