<?php
session_start();

if(!isset($_SESSION['a'])) {
    $_SESSION['a'] = [];
    $_SESSION['obj'] = []; // Agurku objektai
    $_SESSION['agurku ID'] = 0;
}

include __DIR__.'/Agurkas.php';

// Sodinimo scenarijus
if(isset($_POST['sodinti'])) {

    $agurkoObj = new Agurkas;
    $agurkoObj->id = $_SESSION['agurku ID'] + 1;
    $agurkoObj->count = 0;

    $_SESSION['obj'][] = serialize($agurkoObj);

    $rand = rand(1, 5);
    $_SESSION['a'][] = [
        'id' => ++$_SESSION['agurku ID'],
        'agurkai' => 0,
        'img' => $rand . '.png'
    ];
    header('Location: http://localhost/agurkai/sodinimas.php');
    exit;
}
// Isrovimo scenarijus
if(isset($_POST['rauti'])) {
    foreach ($_SESSION['a'] as $index => $agurkas) {
        if($_POST['rauti'] == $agurkas['id']) {
            unset($_SESSION['a'][$index], $_SESSION['obj'][$index]);
            header('Location: http://localhost/agurkai/sodinimas.php');
            exit;
        }
    }
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
        <a href="auginti.php">Auginti</a>
        <a href="sodas.php">Sodas</a>
    </div>
</header>
<main>
    <form action="" method="POST">
        <?php foreach($_SESSION['obj'] as $agurkas): ?>
        <?php $agurkas = unserialize($agurkas) ?>
        <div class="sodas">
            <div class="imgDiv">
                <img src="./img/<?=$agurkas['img']?>" alt="agurcikas" class="images">
            </div>
            <div class="agurkai">
                <p class="agurkaiText">
                Agurkas nr. <?= $agurkas->id ?>
                Agurku: <?= $agurkas->count ?>
                </p>
            </div>
            <div class="israuti">
                <button type="submit" name="rauti" class="israutiButton" value="<?= $agurkas->id ?>">israuti</button>
            </div>
        </div>
        <?php endforeach ?>
        <button type="submit" name="sodinti" class="sodinti">SODINTI</button>
    </form>
</main>
</body>
</html>