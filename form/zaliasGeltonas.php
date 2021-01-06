<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo 'POST METODAS';
    $backgroundColor = 'green';

    // HomeWork #7

    // header('Location: http://localhost/form/zaliasGeltonas.php');
    // die;
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo 'GET METODAS';
    $backgroundColor = 'yellow';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ND 6</title>
</head>
<style>
    body {
        background: <?= $backgroundColor ?>;
    }
</style>
<body>

</body>
</html>
<!-- GET FORM -->
<form action="" method="get">
<button type="submit">GET</button>
</form>

<!-- POST FORM -->
<form action="" method="post">
<button type="submit">POST</button>
</form>