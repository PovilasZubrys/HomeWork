<?php
defined('DOOR_BELL') || die('Iėjimas tik pro duris :)');

use Sodas\App;
use Sodas\Store;
use Cucumber\Agurkas;
use Tomato\Pomidoras;

$store = new Store('augalas');

// Agurku sodinimo scenarijus
if(isset($_POST['sodintiAgurka'])) {
    
    $agurkoObj = new Agurkas($store->getNewId());
    $store->addNew($agurkoObj);

    App::redirect('sodinimas');
}

//  Pomidoru sodinimo scenarijus
if(isset($_POST['sodintiPomidora'])) {
    
    $pomidoroObj = new Pomidoras($store->getNewId());
    $store->addNew($pomidoroObj);

    App::redirect('sodinimas');
}

// Isrovimo scenarijus
if(isset($_POST['rauti'])) {

    $store->remove($_POST['rauti']);

    App::redirect('sodinimas');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sodinimas</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <h1>Agurku sodas</h1>
        <h2>Sodinimas</h2>
        <div>
            <a href="<?= URL.'auginti' ?>">Auginti</a>
            <a href="<?= URL.'sodas' ?>">Sodas</a>
        </div>
    </header>
    <main>
        <form action="<?= URL.'sodinimas' ?>" method="POST">

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
                        Agurku: <?= $augalas->count ?>
                        </p>
                    </div>
                    <div class="israuti">
                        <button type="submit" name="rauti" class="israutiButton" value="<?= $augalas->id ?>">israuti</button>
                    </div>
                </div>
        
                <?php endif ?>
                <?php if ($augalas instanceof Pomidoras): ?>
        
                <div class="pomidoras">
                    <div class="imgDiv">
                        <img src="./img/pomidoras/<?= $augalas->img ?>.png" alt="agurcikas" class="images">
                    </div>
                    <div class="agurkai">
                        <p class="agurkaiText">
                        Pomidoras nr. <?= $augalas->id ?>
                        Pomidoru: <?= $augalas->count ?>
                        </p>
                    </div>
                    <div class="israuti">
                        <button type="submit" name="rauti" class="israutiButton" value="<?= $augalas->id ?>">israuti</button>
                    </div>
                </div>

            <?php endif ?>
            <?php endforeach ?>
            <button type="submit" name="sodintiAgurka" class="sodintiAgurka">SODINTI AGURKA</button>
            <button type="submit" name="sodintiPomidora" class="sodintiPomidora">SODINTI POMIDORA</button>
        </form>
    </main>
</body>
</html>
