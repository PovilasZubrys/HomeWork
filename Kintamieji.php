<!-- 1 Užduotis -->
<h1>1 Užduotis</h1>
<?php
$name = 'Povilas';
$lastName = 'Zubrys';
$birthAge = 1997;
$currentYear = 2020;

$age = $currentYear - $birthAge;

echo "Aš esu $name $lastName. Man yra $age metai(ų)";

?>

<!-- 2 Užduotis -->

<h1>2 Užduotis</h1>

<?php
$num1 = rand(0, 4);
$num2 = rand(0, 4);

echo "Pirmas skaičius: $num1" . "</br>";
echo "Antras skaičius: $num2" . "</br>";

if ($num1 < $num2 && $num1 != 0) {
    echo "$num2 / $num1 = ";
    $result = $num2 / $num1;
} else if ($num1 > $num2 && $num2 != 0)  {
    echo "$num1 / $num2 = ";
    $result = $num1 / $num2;
} else if ($num1 = $num2) {
    echo "$num1 / $num2 = ";
    $result = $num1 / $num2;
} else {
    $result = 'Dalyba iš nulio yra negalima';
    echo $result;
}
if ($result != 0) {
    $rounded = round($result, 2);
    echo $rounded;
}
?>

<!-- 3 Užduotis -->

<h1>3 Užduotis</h1>

<?php
$skaic1 = rand(0, 25);
$skaic2 = rand(0, 25);
$skaic3 = rand(0, 25);

echo "Pirmas skaičius: $skaic1" . "</br>";
echo "Antras skaičius: $skaic2" . "</br>";
echo "Trečias skaičius: $skaic3" . "</br>";

if ($skaic2 < $skaic1 && $skaic1 < $skaic3 || $skaic2 > $skaic1 && $skaic1 > $skaic3) {
    echo "Vidurinis skaičius: $skaic1";
} else if ($skaic1 < $skaic2 && $skaic2 < $skaic3 || $skaic1 > $skaic2 && $skaic2 > $skaic3) {
    echo "Vidurinis skaičius: $skaic2";
} else if ($skaic1 < $skaic3 && $skaic3 < $skaic2 || $skaic1 > $skaic3 && $skaic3 > $skaic2) {
    echo "Vidurinis skaičius: $skaic3";
} else if ($skaic1 = $skaic3 || $skaic2 = $skaic3 || $skaic1 = $skaic3) {
    echo "Skaičiai kartojas...";
}
?>

<!-- 4 Užduotis -->

<h1>4 Užduotis</h1>

<?php
$krast2 = rand(1, 10);
$krast3 = rand(1, 10);
$krast1 = rand(1, 10);

echo "Pirma kraštine: $krast1" . "</br>";
echo "Antra kraštine: $krast2" . "</br>";
echo "Trečia kraštine: $krast3" . "</br>";

if ($krast1 + $krast2 > $krast3 || $krast1 + $krast3 > $krast2 || $krast2 + $krast3 > $krast1) {
    echo 'Trikampis yra įmanomas.';
} else {
    echo 'Trikampis neįmanomas.';
}
?>

<!-- 5 Užduotis -->

<h1>5 Užduotis</h1>

<?php
$kint1 = rand(0, 2);
$kint2 = rand(0, 2);
$kint3 = rand(0, 2);
$kint4 = rand(0, 2);

echo "Pirmas kintamasis: $kint1" . "</br>";
echo "Antras kintamasis: $kint2" . "</br>";
echo "Trečias kintamasis: $kint3" . "</br>";
echo "Ketvirtas kintamasis: $kint4" . "</br>";

$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;

if ($kint1 === 0) {
    $nuliai++;
} else if ($kint1 === 1) {
    $vienetai++;
} else if ($kint1 === 2) {
    $dvejetai++;
}
if ($kint2 === 0) {
    $nuliai++;
} else if ($kint2 === 1) {
    $vienetai++;
} else if ($kint2 === 2) {
    $dvejetai++;
}
if ($kint3 === 0) {
    $nuliai++;
} else if ($kint3 === 1) {
    $vienetai++;
} else if ($kint3 === 2) {
    $dvejetai++;
}
if ($kint4 === 0) {
    $nuliai++;
} else if ($kint4 === 1) {
    $vienetai++;
} else if ($kint4 === 2) {
    $dvejetai++;
}
echo '----- Rezultatai -----' . "</br>";
echo "Nuliai: $nuliai" . "</br>";
echo "Vienetai: $vienetai" . "</br>";
echo "Dvejetai: $dvejetai" . "</br>";
?>

<!-- 6 Užduotis -->

<h1>6 Užduotis</h1>

<?php
$headerNum = rand(1, 6);
echo "<h$headerNum>$headerNum</h$headerNum>"
?>

<!-- 7 Užduotis -->

<h1>7 Užduotis</h1>

<?php
$sk1 = rand(-10, 10);
$sk2 = rand(-10, 10);
$sk3 = rand(-10, 10);

if ($sk1 < 0) {
    echo '<span style="color: green">Pirmas skaičius: ' . "$sk1</span>" . "</br>";
} else if ($sk1 == 0) {
    echo '<span style="color: red">Pirmas skaičius: ' . "$sk1</span>" . "</br>";
} else if ($sk1 > 0) {
    echo '<span style="color: blue">Pirmas skaičius: ' . "$sk1</span>" . "</br>";
}
if ($sk2 < 0) {
    echo '<span style="color: green">Antras skaičius: ' . "$sk2</span>" . "</br>";
} else if ($sk2 == 0) {
    echo '<span style="color: red">Antras skaičius: ' . "$sk2</span>" . "</br>";
} else if ($sk2 > 0) {
    echo '<span style="color: blue">Antras skaičius: ' . "$sk2</span>" . "</br>";
}
if ($sk3 < 0) {
    echo '<span style="color: green">Trečias skaičius: ' . "$sk3</span>" . "</br>";
} else if ($sk3 == 0) {
    echo '<span style="color: red">Trečias skaičius: ' . "$sk3</span>" . "</br>";
} else if ($sk3 > 0) {
    echo '<span style="color: blue">Trečias skaičius: ' . "$sk3</span>" . "</br>";
}
?>

<!-- 8 Užduotis -->

<h1>8 Užduotis</h1>

<?php
$zvakes = rand(5, 3000);
$zvakesKaina = $zvakes * 5;
$nuol3 = ($zvakesKaina / 100) * 3;
$nuol4 = ($zvakesKaina / 100) * 4;

echo "Žvakių kiekis: $zvakes" . "</br>";

if (1000 <= $zvakesKaina && $zvakesKaina <= 2000) {
    $galutKaina = $zvakesKaina - $nuol3;
    echo "Kaina su 3% nuolaida: $galutKaina";
} else if ($zvakesKaina > 2000) {
    $galutKaina = $zvakesKaina - $nuol4;
    echo "Kaina su 4% nuolaida: $galutKaina";
} else {
    echo "Žvakės kaina be nuolaidos: $zvakesKaina";
}
?>

<!-- 9 Užduotis -->

<h1>9 Užduotis</h1>

<?php
$pirmas = rand(0, 100);
$antras = rand(0, 100);
$trecias = rand(0, 100);

$kintamieji = 3;

$vid = round(($pirmas + $antras + $trecias) / 3);
echo "Pirmas vidurkis: $vid" . "</br>";

if ($pirmas < 10 || $pirmas > 90) {
    $kintamieji = $kintamieji - 1;
    $pirmas = 0;
}
if ($antras < 10 || $antras > 90) {
    $kintamieji = $kintamieji - 1;
    $antras = 0;
}
if ($trecias < 10 || $trecias > 90) {
    $kintamieji = $kintamieji - 1;
    $trecias = 0;
}

$vid2 = round (($pirmas + $antras + $trecias) / $kintamieji);
echo "Antras vidurkis: $vid2"
?>

<!-- 10 Užduotis -->

<h1>10 Užduotis</h1>

<?php
$val = rand(1, 12);
$min = rand(0, 59);
$sek = rand(0, 59);
$sekp = rand(0, 300);

$temp_sek = $sek + $sekp;
echo "Prieš pridėjimą: $val val $min min $sek sek" . "</br>";

echo "Pridėdu $sekp sekundes" . "</br>";
if ($temp_sek > 60) {
    $count_min = floor($temp_sek / 60);
    $min = $min + $count_min;
    $sek = $temp_sek - ($count_min * 60);
} else {
    $sek = $temp_sek;
}
if ($min > 60) {
    $count_hrs = floor($min / 60);
    $val = $val +  $count_hrs;
    $min = $min = ( $count_hrs * 60);
}

echo "Po pridėjimo: $val val $min min $sek sek"

?>

<!-- 11 Užduotis -->

<h1>11 Užduotis</h1>