<?php
defined('DOOR_BELL') || die('Iėjimas tik pro duris :)');

use Sodas\App;
use Sodas\Store;
use Sodas\Agurkas;
use Tomato\Pomidoras;

$store = new Store('augalas');

if('POST' == $_SERVER['REQUEST_METHOD']) {


    $rawData = file_get_contents("php://input");
    $rawData = json_decode($rawData, 1);

    // LISTo SCENARIJUS

    if (isset($rawData['list'])) {
        ob_start();
        include __DIR__.'/listAgurkas.php';
        $out = ob_get_contents();
        ob_end_clean();
        $json = ['list' => $out];
        $json = json_encode($json);
        header('Content-type: application/json');
        http_response_code(200);
        echo $json;
        die;

    }


    // SODINIMO SCENARIJUS
    elseif (isset($rawData['sodinti'])) {

        $kiekis = (int) $rawData['kiekis'];

        if (0 > $kiekis || 4 < $kiekis) { // <--- validacija
            if (0 > $kiekis) {
                $error = 1; // <-- neigiamas agurku kiekis
            }
            elseif(4 < $kiekis) {
                $error = 2; // <-- per daug
            }
            ob_start();
            include __DIR__.'/error.php';
            $out = ob_get_contents();
            ob_end_clean();
            $json = ['msg' => $out];
            $json = json_encode($json);
            header('Content-type: application/json');
            http_response_code(400);
            echo $json;
            die;
        }

    foreach(range(1, $kiekis) as $_) {
        $agurkoObj = new Agurkas($store->getNewId());
        $store->addAgurkas($agurkoObj);
    }
    ob_start();
    include __DIR__.'/listAgurkas.php';
    $out = ob_get_contents();
    ob_end_clean();
    $json = ['list' => $out];
    $json = json_encode($json);
    header('Content-type: application/json');
    http_response_code(201);
    echo $json;
    die;
}

    // ISROVIMO SCENARIJUS
    if (isset($rawData['rautiAgurka'])) {
        $store->remove($rawData['id']);

        ob_start();
        include __DIR__.'/listAgurkas.php';
        $out = ob_get_contents();
        ob_end_clean();
        $json = ['list' => $out];
        $json = json_encode($json);
        header('Content-type: application/json');
        http_response_code(200);
        echo $json;
        die;

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" defer integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
    <script src="http://localhost/HomeWork/agurkai-js/js/app.js" defer></script>
    <script>const apiUrl = 'http://localhost/HomeWork/agurkai-js/sodinimas';</script>
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
        <div id="error"></div>
        <div id="ansAgurkai"></div>
        <div id="ansPomidorai"></div>
        <div id="list"></div>

        <form action="<?= URL.'sodinimas' ?>" method="POST">
            <div class="sodAgurka">
                <input class="agurkasKiek" type="text" name="sodintiAgurka" id="agurkas">
                <button class="sodintiAgurka" type="button">Sodinti agurka</button>
            </div>
            <div class="sodPomidora">
                <input class="pomidorasKiek" type="text" name="sodintiPomidora" id="pomidoras">
                <button class="sodintiPomidora" type="button">Sodinti pomidora</button>
            </div>

        </form>

    </main>
</body>
</html>