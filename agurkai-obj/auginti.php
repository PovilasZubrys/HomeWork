<?php
session_start();

if (!isset($_SESSION['a'])) {
    $_SESSION['a'] = [];
    $_SESSION['agurku ID'] = 0;
}

include __DIR__.'/Agurkas.php';

// AUGINIMO SCENARIJUS
if (isset($_POST['auginti'])) {
    foreach($_SESSION['a'] as $index => &$agurkas) {
        $agurkas['agurkai'] += $_POST['kiekis'][$agurkas['id']];
    }

    foreach($_SESSION['a'] as $index => &$agurkas)

    // _d($_POST['kiekis']);
    header('Location: http://localhost/agurkai/auginti.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auginimas</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
    <h1>Agurku sodas</h1>
    <h2>Sodinimas</h2>
    <div>
        <a href="sodinimas.php">Sodinimas</a>
        <a href="sodas.php">Sodas</a>
    </div>
</header>
<main>
    <form action="" method="post">
        <?php foreach($_SESSION['a'] as $agurkas): ?>
        <div class="sodas">
            <div class="imgDiv">
                <img src="./img/<?=$agurkas['img']?>" alt="agurcikas" class="images">
            </div>
            <?php $kiekis = rand(2, 9) ?>
            <div class="agurkai">
                <p class="agurkaiText">
                    Agurkas nr. <?= $agurkas['id'] ?>
                    Agurku: <?= $agurkas['agurkai'] ?> +<?= $kiekis ?>
                </p>
            </div>
            <input type="hidden" name="kiekis[<?= $agurkas['id'] ?>]" value="<?= $kiekis ?>">
        </div>
        <?php endforeach ?>
        <button type="submit" name="auginti" class="auginti">Auginti</button>
    </form>
</main>
</body>
</html>
