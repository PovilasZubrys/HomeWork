<?php
session_start();
include __DIR__.'/App.php';
include __DIR__.'/Augalai.php';

include __DIR__.'/Agurkas.php';
include __DIR__.'/Pomidoras.php';

App::isSetSession();

// AUGINIMO SCENARIJUS
if (isset($_POST['auginti'])) {

    App::auginti();
    App::redirect('auginti');
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
        <?php if ($augalas instanceof Agurkas): ?>
        
        <div>
            <div class="agurkas">
                <div class="imgDiv">
                    <img src="./img/agurkas/<?= $augalas->img ?>.png" alt="agurcikas" class="images">
                </div>
                <div class="agurkai">
                    <p class="agurkaiText">
                        Agurkas nr. <?= $augalas->id ?>
                        Agurku: <?= $augalas->count ?> + <?= $kiekis = $augalas->augti() ?>
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
                        Pomidoras: <?= $augalas->count ?> + <?= $kiekis = $augalas->augti() ?>
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
