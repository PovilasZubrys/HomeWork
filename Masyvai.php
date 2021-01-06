<!-- 1 Užduotis -->

<h1>1 Užduotis</h1>

<?php
$array = [];
$arrayLength = 30;
for ($i = 0; $i < $arrayLength; $i++) { 
    $randElement = rand(5, 25);
    array_push($array, $randElement);
}
echo '<pre>';
print_r($array);
?>

<!-- 2 Užduotis -->

<h1>2 Užduotis</h1>

<h2>A)</h2>

<?php
$countTen = 0;

for ($i=0; $i < $arrayLength; $i++) { 
    $moreTen = $array[$i];
    echo $moreTen . ' ';
    ($moreTen > 10) ? $countTen++ : '';
}
echo '<br>' . 'Skaičių daugiau už 10: ' . $countTen;
?>

<h2>B)</h2>

<?php
$largest = max($array);
echo "Didžiausias skaičius array: $largest";
?>

<h2>C)</h2>

<?php
$arraySum = 0;
for ($i = 0; $i < $arrayLength; $i++) {
    $arrayValue = $array[$i];
    $arraySum += $arrayValue;
}

echo "Array skaičių suma: $arraySum";
?>

<h2>D)</h2>

<?php
$newArray = [];
for ($i = 0; $i < $arrayLength; $i++) {
    $arrayElement = $array[$i];
    $elementNew = $arrayElement - $i;
    array_push($newArray, $elementNew); 
}
echo '<pre>';
print_r($newArray);
?>

<h2>E)</h2>

<?php
$addElements = 10;
for ($i = 0; $i < $addElements; $i++) { 
    $randElement = rand(5, 25);
    array_push($array, $randElement);
}
echo '<pre>';
print_r($array);
?>

<h2>F)</h2>

<?php
$porinisArray = $nePorinisArray = [];
$arrayLength = count($array);

for ($i = 0; $i < $arrayLength; $i++) { 
    if ($i % 2 == 0) {
        array_push($porinisArray, $array[$i]);
    } else {
        array_push($nePorinisArray, $array[$i]);
    }
}
echo 'Porinis array: <pre>';
print_r($porinisArray);
echo 'Neporinis array: <pre>';
print_r($nePorinisArray);
?>

<h2>G)</h2>

<?php
$porinisLength = count($porinisArray);
for ($i = 0; $i < $porinisLength; $i++) { 
    ($porinisArray[$i] > 15) ? $porinisArray[$i] = 0 : '';
}
echo 'Skaičiai didesni nei 15 pakeisti į 0: ' . '<br>';
print_r($porinisArray);
?>

<h2>H)</h2>

<?php
for ($i = 0; $i < $arrayLength; $i++) { 
    if ($array[$i] > 10) {
        echo $array[$i];
        break;
    }
}
?>

<h2>I)</h2>

<?php
echo 'Neišrinkti index: <br>';
print_r($array);

for ($i = 0; $i < $arrayLength; $i++) { 
    if ($i % 2 == 0) {
        unset($array[$i]);
    }
}
echo 'Išrinkti index: <br>';
print_r($array);
?>

<!-- 3 Užduotis -->

<h1>3 Užduotis</h1>

<?php
$length = 200;
$masyvas = [];
$a = 'A';
$b = 'B';
$c = 'C';
$d = 'D';
$countA = $countB = $countC = $countD = 0;

for ($i = 0; $i < $length; $i++) { 
    $rand = rand(0, 3);
    if ($rand == 0){
        array_push($masyvas, $a);
        $countA++;
    }
    if ($rand == 1){
        array_push($masyvas, $b);
        $countB++;
    }
    if ($rand == 2){
        array_push($masyvas, $c);
        $countC++;
    }
    if ($rand == 3){
        array_push($masyvas, $d);
        $countD++;
    }
}
echo "Raidžių A: $countA" . '<pre>';
echo "Raidžių B: $countB" . '<pre>';
echo "Raidžių C: $countC" . '<pre>';
echo "Raidžių D: $countD" . '<pre>';
print_r($masyvas);
?>

<!-- 4 Užduotis -->

<h1>4 Užduotis</h1>

<?php
sort($masyvas);
print_r($masyvas);
?>

<!-- 5 Užduotis -->

<h1>5 Užduotis</h1>

<?php
$e = 'E';
$f = 'F';
$g = 'G';
$h = 'H';
$i = 'I';
$unikalusLength = 0;
$masyvas1 = $masyvas2 = $masyvas3 = $masyvasFinal = [];
$string1 = $string2 = $string3 = $finalString = '';

for ($y = 0; $y < $length; $y++) { 
    $randomLetter = rand(0, 2);
    ($randomLetter === 0) ? array_push($masyvas1, $a) : '';
    ($randomLetter === 1) ? array_push($masyvas1, $b) : '';
    ($randomLetter === 2) ? array_push($masyvas1, $c) : '';
}
for ($y = 0; $y < $length; $y++) {
    $randomLetter = rand(0, 2);
    ($randomLetter === 0) ? array_push($masyvas2, $d) : '';
    ($randomLetter === 1) ? array_push($masyvas2, $e) : '';
    ($randomLetter === 2) ? array_push($masyvas2, $f) : '';
}
for ($y = 0; $y < $length; $y++) {
    $randomLetter = rand(0, 2);
    ($randomLetter === 0) ? array_push($masyvas3, $g) : '';
    ($randomLetter === 1) ? array_push($masyvas3, $h) : '';
    ($randomLetter === 2) ? array_push($masyvas3, $i) : '';
}

for ($i = 0; $i < $length; $i++) { 
    array_push($masyvasFinal, $masyvas1[$i] . $masyvas2[$i] . $masyvas3[$i]);
}
echo 'Final masyvas: <br>';
print_r($masyvasFinal);
$unikalus = array_unique($masyvasFinal);
$unikalusKiekis = count($unikalus) . '<br>';

echo "Unikalių kombinacijų kiekis: $unikalusKiekis";
print_r($unikalus);
?>

<!-- 6 Užduotis -->

<h1>6 Užduotis</h1>

<?php
$random1 = $random2 = [];

while (count($random1) < 100 || count($random2) < 100) {
    $rand1 = rand(100, 999);
    if(count($random1) < 100) {
        (in_array($rand1, $random1) == true) ?: array_push($random1, $rand1);
    }
    $rand2 = rand(100, 999);
    if (count($random2) < 100) {
        (in_array($rand2, $random2) == true) ?: array_push($random2, $rand2);
    }
}
print_r($random1);
print_r($random2);
?>

<!-- 7 Užduotis -->

<h1>7 Užduotis</h1>

<?php
$naujasMasyvas = [];

for ($i = 0; $i < count($random1); $i++) {
    (in_array($random1[$i], $random2) == true) ?: array_push($naujasMasyvas, $random1[$i]);
}
print_r($naujasMasyvas);
?>

<!-- 8 Užduotis -->

<h1>8 Užduotis</h1>

<?php
$anotherArray = [];

for ($i = 0; $i < count($random1); $i++) {
    (in_array($random1[$i], $random2) == true) ? array_push($anotherArray, $random1[$i]) : '';
}
print_r($anotherArray);
?>

<!-- 9 Užduotis -->

<h1>9 Užduotis</h1>

<?php
$arrayTwo = [];

for ($i = 0; $i < count($random1); $i++) {
    $idx = $random1[$i];
    $arrayTwo[$idx] = $random2[$i];
}
print_r($arrayTwo);
?>

<!-- 10 Užduotis -->

<h1>10 Užduotis</h1>

<?php 
$mas = [];

for ($i = 0; $i < 10; $i++) {
    $atsitik = rand(5, 25);
    if ($i < 2) {
        array_push($mas, $atsitik);
    } else {
        $rez = $mas[$i - 1] + $mas[$i - 2];
        array_push($mas, $rez);
    }
}
print_r($mas);
?>