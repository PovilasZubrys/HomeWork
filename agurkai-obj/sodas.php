<?php
defined('DOOR_BELL') || die('Iėjimas tik pro duris :)');

use Sodas\App;
use Sodas\Store;
use Cucumber\Agurkas;
use Tomato\Pomidoras;

$store = new Store('augalas');

// Skynimo scenarijus
if(isset($_POST['skinti'])) {
    _d($_POST['skinti']);
    die;
    $store->skinti();
    App::redirect('sodas');
}
// Skinti visus
if(isset($_POST['skintiVisus'])) {
    
    $store->skintiVisus();
    App::redirect('sodas');
}

// Skinti visą derlių
if(isset($_POST['skintiDerliu'])) {

    $store->skintiDerliu();
    App::redirect('sodas');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sodas</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
    <h1>Agurku sodas</h1>
    <h2>Sodinimas</h2>
    <div>
        <a href="<?= URL.'auginti' ?>">Auginti</a>
        <a href="<?= URL.'sodinimas' ?>">Sodinimas</a>
    </div>
</header>
<main>
    <h3 class="error">
        <?php
        if (isset($_SESSION['err'])) {
            echo $_SESSION['err'];
            unset($_SESSION['err']);
        }
        ?>
    </h3>
    <form action="<?= URL.'sodas' ?>" method="post">
        <?php foreach($store->getAll() as $augalas): ?>
        <?php if ($augalas instanceof Agurkas): ?>
        
        <div class="agurkas">
            <div class="imgDiv">
                <img src="./img/agurkas/<?=$augalas->img?>.png" alt="agurcikas" class="images">
            </div>
            <div class="agurkai">
                <p class="agurkaiText"> 
                    Agurkas Nr. <?= $augalas->id ?>
                    Galima skinti: <?= $augalas->count ?>
                </p>
                <input type="text" class="skinam" name="skinam[<?=$augalas->id?>]">
            </div>
            <div class="mygtukai">
                <button type="submit" name="skinti" class="skinti" value="<?=$augalas->id?>">Skinti agurkus</button>
                <button type="submit" name="skintiVisus" class="skintiVisus">Skinti Visus Agurkus</button>
            </div>
        </div>

        <?php elseif ($augalas instanceof Pomidoras): ?>

        <div class="pomidoras">
            <div class="imgDiv">
                <img src="./img/pomidoras/<?=$augalas->img?>.png" alt="agurcikas" class="images">
            </div>
            <div class="agurkai">
                <p class="agurkaiText"> 
                    Pomidoras Nr. <?= $augalas->id ?>
                    Galima skinti: <?= $augalas->count ?>
                </p>
                <input type="text" class="skinam" name="skinam[<?=$augalas->id?>]">
            </div>
            <div class="mygtukai">
                <button type="submit" name="skinti" class="skinti" value="<?=$augalas->id?>">Skinti pomidorus</button>
                <button type="submit" name="skintiVisus" class="skintiVisus" value="<?=$augalas->id?>">Skinti Visus Pomidorus</button>
            </div>
        </div>
        <?php endif ?>
        <?php endforeach ?>
    <button type="submit" name="skintiDerliu" class="skintiDerliu">Skinti Derliu</button>
    </form>
</main>
</body>
</html>