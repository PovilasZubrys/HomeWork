<?php
session_start();

include __DIR__.'/Agurkas.php';
include __DIR__.'/Pomidoras.php';

if(!isset($_SESSION['augalas'])) {
    $_SESSION['augalas'] = []; // Agurku objektai
    $_SESSION['augalasID'] = 0;
}

// AUGINIMO SCENARIJUS
if (isset($_POST['auginti'])) {
    foreach($_SESSION['augalas'] as $index => $augalas) { // << Serializacijos stringas
        $augalas = unserialize($augalas); // << agurko objektas
        if ($augalas instanceof Agurkas) {
            $augalas->addAgurkas($_POST['kiekis'][$augalas->id]); // << Pridedam agurka
        } else {
            $augalas->addPomidoras($_POST['kiekis'][$augalas->id]); // << Pridedam agurka
        }
        $augalas = serialize($augalas); // << vel stringas
        $_SESSION['augalas'][$index] = $augalas; // << issaugom agurkus
    }

    header('Location: http://localhost/HomeWork/agurkai-obj/auginti.php');
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
        <?php foreach($_SESSION['augalas'] as $augalas): ?>
        <?php $augalas = unserialize($augalas) ?>
        <?php $kiekis = rand(2, 9) ?>
        <?php if ($augalas instanceof Agurkas): ?>
        
        <div>
            <div class="agurkas">
                <div class="imgDiv">
                    <img src="./img/agurkas/<?= $augalas->img ?>.png" alt="agurcikas" class="images">
                </div>
                <div class="agurkai">
                    <p class="agurkaiText">
                        Agurkas nr. <?= $augalas->id ?>
                        Agurku: <?= $augalas->count ?> + <?= $kiekis ?>
                    </p>
                <input type="hidden" name="kiekis[<?= $augalas->id ?>]" value="<?= $kiekis ?>">
                </div>
            </div>
    
            <?php else: ?>
    
            <div class="pomidoras">
                <div class="imgDiv">
                    <img src="./img/pomidoras/<?= $augalas->img ?>.png" alt="agurcikas" class="images">
                </div>
                <div class="agurkai">
                    <p class="agurkaiText">
                        Pomidoras nr. <?= $augalas->id ?>
                        Pomidoras: <?= $augalas->count ?> + <?= $kiekis ?>
                    </p>
                <input type="hidden" name="kiekis[<?= $augalas->id ?>]" value="<?= $kiekis ?>">
                </div>
            </div>
        </div>

        <?php endif ?>
        <?php endforeach ?>

        <button type="submit" name="auginti" class="auginti">Auginti</button>
    </form>
</main>
</body>
</html>
