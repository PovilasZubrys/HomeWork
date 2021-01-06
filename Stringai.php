<!-- 1 Užduotis -->

<h1>1 užduotis</h1>

<?php
$name = 'Johnny';
$lastname = 'Sins';

$nameCount = strlen($name);
$lastnameCount = strlen($lastname);

if ($nameCount < $lastnameCount) {
    echo $name;
} else if ($lastnameCount < $nameCount) {
    echo $lastname;
}

?>

<!-- 2 Užduotis -->

<h1>2 užduotis</h1>

<?php

echo "Name: " . strtoupper($name) . "</br>";
echo "Last name: " . strtolower($lastname) . "</br>";

?>

<!-- 3 Užduotis -->

<h1>3 užduotis</h1>

<?php
$firtName = substr($name, 0, 1);
$firtLastName = substr($lastname, 0, 1);

echo $firtName;
echo $firtLastName;
?>

<!-- 4 Užduotis -->

<h1>4 užduotis</h1>

<?php
$last = 3;

$nameLast = strlen($name) - $last;
$nameLetters = substr($name, $nameLast);

$lastnameLast = strlen($lastname) - $last;
$lastnameLetters = substr($lastname, $lastnameLast);

echo "Vardo paskutinės $last raidės '$nameLetters' <br>";
echo "Vardo paskutinės $last raidės '$lastnameLetters'";
?>


<!-- 5 Užduotis -->

<h1>5 užduotis</h1>

<?php
$american = 'An American in Paris';

$lettersReplaced = preg_replace('/[aA]/', '*', $american);

echo $lettersReplaced;
?>

<!-- 6 Užduotis -->

<h1>6 užduotis</h1>

<?php
echo $american . "<br>";

$letterCount = preg_match_all("/[aA]/", $american);

echo "Skaičius raidžių A $letterCount";
?>

<!-- 7 Užduotis -->

<h1>7 užduotis</h1>

<?php
$breakfast = 'Breakfast at Tiffany\'s';
$space = '2001: A Space Odyssey';
$wonderful = 'It\'s a Wonderful Life';

echo $vowelDelete = preg_replace("/[aeiou]/i", '', $american) . '<br>';
echo $vowelDeleteBreakfast = preg_replace("/[aeiou]/i", '', $breakfast) . '<br>';
echo $vowelDeleteSpace = preg_replace("/[aeiou]/i", '', $space) . '<br>';
echo $vowelDeleteWonderful = preg_replace("/[aeiou]/i", '', $wonderful) . '<br>';
?>

<!-- 8 Užduotis -->

<h1>8 užduotis</h1>

<?php
echo $starwars = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope' . "<br>";
echo 'Epizodo numeris: ' . $starwarsEpsiode = preg_replace('/[^0-9]/', '', $starwars);
?>

<!-- 9 Užduotis -->

<h1>9 užduotis</h1>

<?php
$stringas = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood';
$stringas2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

$stringai = preg_match_all('/\b\S{1,5}\b/', $stringas);
$stringai2 = preg_match_all('/\b\S{1,5}\b/', $stringas2);

echo $stringai . "<br>";
echo $stringai2;
?>

<!-- 10 Užduotis -->

<h1>10 užduotis</h1>

<?php
echo substr(str_shuffle("abcdefghijklmnopqrstuvwxyz"),0, 3); 
?>

<!-- 11 Užduotis -->

<h1>11 užduotis</h1>

<?php
$array = explode(' ', $stringas . ' ' . $stringas2);
shuffle($array);
$array = array_slice($array, 0, 10);
$strng = implode(' ', $array);
echo $strng;
?>