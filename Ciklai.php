<!-- 1 Užduotis -->

<h1>1 Užduotis</h1>

<h2>A)</h2>

<?php
$ilgis = 400;
$simbolis = '*';
$linija = '';
$linijaB = '';
$lineLength = 50;

for ($i = 1; $i <= $ilgis; $i++) {
    $linija .= $simbolis;
}

echo "<p style='line-break: anywhere;'>$linija</p>";
?>

<h2>B)</h2>

<?php

for ($i = 1; $i <= $ilgis; $i++) {
    $linijaB .= $simbolis;
    if ($i % $lineLength == 0) {
        $linijaB .= '<br>';
    }
}
echo "<p>$linijaB</p>";
?>

<!-- 2 Užduotis -->

<h1>2 Užduotis</h1>

<?php
$countSkaic = 0;

for ($i = 0; $i < 300; $i++) {
    $randSkaic = rand(0, 300);
    if ($randSkaic > 150) {
        $countSkaic++;
    }
    if ($randSkaic > 275) {
        $randSkaic = "<span style='color: red'>$randSkaic</span>";
    }
    echo $randSkaic . ' ';
}

echo '<br>' . "Skaičių kiekis kurie yra daugiau nei 150: $countSkaic";
?>

<!-- 3 Užduotis -->

<h1>3 Užduotis</h1>

<?php
$dividesFrom = 77;
$randNumbers = rand(3000, 4000);
$randString = '';

for ($i = 1; $i < $randNumbers; $i++) {
    if ($i % $dividesFrom == 0) {
        $randString .= $i . ', ';
    }
}
$randString = rtrim($randString, ', ');
echo $randString;
?>

<!-- 4 Užduotis -->

<h1>4 Užduotis</h1>

<?php
$lineLength = 100;
$line = '';
$star = "<span style='display: inline-block; line-height: 10px; width: 10px;'>$simbolis</span>";
$starRED = "<span style='color: red; display: inline-block; line-height: 10px; width: 10px;'>$simbolis</span>";

for ($i = 1; $i <= $lineLength; $i++) {
    $line .= $star;
}
for ($i = 1; $i <= $lineLength; $i++){
    echo $line . '<br>';
}
?>

<!-- 5 Užduotis -->

<!-- <h1>5 Užduotis</h1> -->


<!-- 6 Užduotis -->

<h1>6 Užduotis</h1>

<h2>A)</h2>

<?php
$herbas = 0;
do {
    $rez = rand(0, 1);
    if ($rez == 0){
        $herbas++;
        echo 'H';
    } else if ($rez == 1) {
        echo 'S';
    }
} while ($rez == 1);
?>

<h2>B)</h2>

<?php
$herb = 0;
do {
    $result = rand(0, 1);
    if ($result == 0) {
        $herb++;
        echo 'H';
    } else if ($result == 1) {
        echo 'S';
    }
} while ($herb < 3);
?>

<h2>C)</h2>

<?php
$end = 'HHH';
$rezC = '';
do {
    $coin = rand(0, 1);
    if ($coin == 0) {
        $rezC .= 'H';
    } else if ($coin == 1) {
        $rezC .= 'S';
    }
    $pos = strpos($rezC, 'HHH');
    echo $rezC;
} while ($pos === false);
?>

<!-- 7 Užduotis -->

<h1>7 Užduotis</h1>

<?php
$kazys = rand(10, 20);
$petras = rand(5, 25);
$limitas = 222;
$kazysPoints = 0;
$petrasPoints = 0;
$kTaskai = '';
$pTaskai = '';
for ($i = 0; $limitas; $i++) {
    $kazysPoints = $kazysPoints + $kazys;
    $kTaskai .= ' ' . $kazysPoints;
    $petrasPoints = $petrasPoints + $petras;
    $pTaskai .= ' ' . $petrasPoints;
    if ($kazysPoints >= $limitas) {
        break;
    } else if ($petrasPoints >= $limitas) {
        break;
    }
}
echo $kTaskai . '<br>';
echo $pTaskai . '<br>';
if ($kazysPoints >= $limitas) {
        echo "Partija laimėjo Kaziukas: $kazysPoints";
    } else if ($petrasPoints >= $limitas) {
        echo "Partija laimėjo Petriukas: $petrasPoints";
    }
?>

<!-- 8 Užduotis -->

<h1>8 Užduotis</h1>

<?php 
$eilutesMax = 21;
$symbolCount = 1;
$half = $eilutesMax / 2;
$r = 0;
$g = 1;
$b = 2;

for ($i = 1; $i <= $eilutesMax; $i++){
    $eilut = str_repeat($simbolis, $symbolCount) . '<br>';
    if ($i <= $half) {
        echo "<div style='text-align: center;'>$eilut</div>";
        $symbolCount += 2;
    } else if ($i >= $half) {
        echo "<div style='text-align: center;'>$eilut</div>";
        $symbolCount -= 2;
    }
}
?>

<!-- 9 Užduotis -->

<h1>9 Užduotis</h1>

<?php
$timeStartA = microtime(true);
for ($i = 0; $i <= 1000000; $i++){
$c = "10 bezdzioniu suvalge 20 bananu.";
}
$timeEndA = microtime(true);
echo $timeA = $timeEndA - $timeStartA . '<br>';

$timeStartB = microtime(true);
for ($i = 0; $i <= 1000000; $i++){
$b = '10 bezdzioniu suvalge 20 bananu.';
}
$timeEndB = microtime(true);
echo $timeB = $timeEndB - $timeStartB . '<br>';

echo $timeB - $timeA;
?>