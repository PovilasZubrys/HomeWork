<?php
session_start();

if (!isset($_SESSION['a'])) {
    $_SESSION['a'] = [];
    $_SESSION['agurku ID'] = 0;
}

// Skynimo scenarijus
if(isset($_POST['skinti'])) {
    foreach($_SESSION['a'] as $index => &$agurkas) {
        if ($agurkas['agurkai'] < $_POST['skinam'][$agurkas['id']] || $_POST['skinam'][$agurkas['id']] < 0) {
            $_SESSION['err'] = 'Blogas agurkų kiekis!';
        } else {
            $skinti = $_POST['skinam'];
            $agurkas['agurkai'] -= $_POST['skinam'][$agurkas['id']];
        }    
    }
    header('Location: http://localhost/agurkai/sodas.php');
    exit;
}

// Skinti visus
if(isset($_POST['skintiVisus'])) {
    foreach($_SESSION['a'] as $index => &$agurkas) {
        if ($_POST['skintiVisus'] == $agurkas['id']) {
            $agurkas['agurkai'] -= $agurkas['agurkai'];
        }
    }
    header('Location: http://localhost/agurkai/sodas.php');
    exit;
}

// Skinti visą derlių
if(isset($_POST['skintiDerliu'])) {
    foreach($_SESSION['a'] as $index => &$agurkas) {
    $agurkas['agurkai'] = 0;
    }
    header('Location: http://localhost/agurkai/sodas.php');
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
        <?php foreach($_SESSION['a'] as $agurkas): ?>
        <div class="sodas">
            <div class="imgDiv">
                <img src="./img/<?=$agurkas['img']?>" alt="agurcikas" class="images">
            </div>
            <div class="agurkai">
                <p class="agurkaiText"> 
                    Agurkas Nr. <?= $agurkas['id'] ?>
                    Galima skinti: <?= $agurkas['agurkai'] ?>
                </p>
                <input type="text" class="skinam" name="skinam[<?=$agurkas['id']?>]" value="<?= $skinti ?? ''?>">
            </div>
            <div class="mygtukai">
                <button type="submit" name="skinti" class="skinti">Skinti</button>
                <button type="submit" name="skintiVisus" class="skintiVisus" value="<?=$agurkas['id']?>">Skinti Visus</button>
            </div>
        </div>
        <?php endforeach ?>
    <button type="submit" name="skintiDerliu" class="skintiDerliu">Skinti Derliu</button>
    </form>
</main>
</body>
</html>