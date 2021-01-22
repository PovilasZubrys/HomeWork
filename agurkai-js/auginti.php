<?php
defined('DOOR_BELL') || die('Iėjimas tik pro duris :)');

use Sodas\App;
use Sodas\Store;
use Cucumber\Agurkas;
use Tomato\Pomidoras;

$store = new Store('augalas');

// AUGINIMO SCENARIJUS
if (isset($_POST['auginti'])) {

    $store->grow();
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
        <a href="<?= URL.'sodinimas' ?>">Sodinimas</a>
        <a href="<?= URL.'sodas' ?>">Sodas</a>
    </div>
</header>
<main>
    <form action="<?= URL.'auginti' ?>" method="post">
        <?php foreach($store->getAll() as $augalas): ?>
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
