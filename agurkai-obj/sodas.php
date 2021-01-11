<?php
session_start();
include __DIR__.'/App.php';
include __DIR__.'/Augalai.php';

include __DIR__.'/Agurkas.php';
include __DIR__.'/Pomidoras.php';

App::isSetSession();

// Skynimo scenarijus
if(isset($_POST['skintiAgurkus'])) {
    foreach($_SESSION['augalas'] as $index => $augalas) {
        $augalas = unserialize($augalas);
        if ($augalas->count < $_POST['skinam'][$augalas->id] || $_POST['skinam'][$augalas->id] < 0 || is_numeric($_POST['skinam'][$augalas->id]) === false) {
            $_SESSION['err'] = 'Blogas agurkų kiekis!';
        } else {
            $skinti = $_POST['skinam'];
            $augalas->skintiAgurkus($_POST['skinam'][$augalas->id]);
            $augalas = serialize($augalas);
            $_SESSION['augalas'][$index] = $augalas;
        }
    }
    header('Location: http://localhost/HomeWork/agurkai-obj/sodas.php');
    exit;
}

if(isset($_POST['skintiPomidorus'])) {
    foreach($_SESSION['augalas'] as $index => $augalas) {
        $augalas = unserialize($augalas);
        if ($augalas->count < $_POST['skinam'][$augalas->id] || $_POST['skinam'][$augalas->id] < 0 || is_numeric($_POST['skinam'][$augalas->id]) === false) {
            $_SESSION['err'] = 'Blogas agurkų kiekis!';
        } else {
            $skinti = $_POST['skinam'];
            $augalas->skintiPomidorus($_POST['skinam'][$augalas->id]);
            $augalas = serialize($augalas);
            $_SESSION['augalas'][$index] = $augalas;
        }
    }
    header('Location: http://localhost/HomeWork/agurkai-obj/sodas.php');
    exit;
}

// Skinti visus
if(isset($_POST['skintiVisus'])) {
    foreach($_SESSION['augalas'] as $index => $augalas) {
        $augalas = unserialize($augalas);
        if ($_POST['skintiVisus'] == $augalas->id) {
            $augalas->skintiVisus();
            $augalas = serialize($augalas);
            $_SESSION['augalas'][$index] = $augalas;
            header('Location: http://localhost/HomeWork/agurkai-obj/sodas.php');
            exit;
        }
    }
    }

// Skinti visą derlių
if(isset($_POST['skintiDerliu'])) {
    $_SESSION['augalas'] = Augalai::skintiDerliu($_SESSION['augalas']);
    header('Location: http://localhost/HomeWork/agurkai-obj/sodas.php');
    exit;
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
        <a href="auginti.php">Auginti</a>
        <a href="sodinimas.php">Sodinimas</a>
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
    <form action="" method="post">
        <?php foreach($_SESSION['augalas'] as $augalas): ?>
        <?php $augalas = unserialize($augalas) ?>
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
                <input type="text" class="skinam" name="skinam[<?=$augalas->id?>]" value="<?= $skinti ?? ''?>">
            </div>
            <div class="mygtukai">
                <button type="submit" name="skintiAgurkus" class="skinti">Skinti agurkus</button>
                <button type="submit" name="skintiVisus" class="skintiVisus" value="<?=$augalas->id?>">Skinti Visus Agurkus</button>
            </div>
        </div>

        <?php else: ?>

        <div class="pomidoras">
            <div class="imgDiv">
                <img src="./img/pomidoras/<?=$augalas->img?>.png" alt="agurcikas" class="images">
            </div>
            <div class="agurkai">
                <p class="agurkaiText"> 
                    Pomidoras Nr. <?= $augalas->id ?>
                    Galima skinti: <?= $augalas->count ?>
                </p>
                <input type="text" class="skinam" name="skinam[<?=$augalas->id?>]" value="<?= $skinti ?? ''?>">
            </div>
            <div class="mygtukai">
                <button type="submit" name="skintiPomidorus" class="skinti">Skinti pomidorus</button>
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