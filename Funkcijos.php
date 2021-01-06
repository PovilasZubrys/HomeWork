<!-- 1 Užduotis -->

<?php
function text($data) {
    echo "<h1>$data</h1>";
}
text('1 užduotis');
?>

<!-- 2 Užduotis -->

<?php
function headerNumber($text, $number) {
    echo "<h$number>$text</h$number>";
}
headerNumber('2 užduotis', 1);
?>

<!-- 3 Užduotis -->

<h1>3 Užduotis</h1>

<?php
function h1($text){
    print_r($text);
}

function h1CallBack($text){
    $text = is_array($text) ? $text[0] : $text;

    return "<h1 style=\"display: inline-block;\">$text</h1>";
}

$string = md5(time());

echo $string;
echo '<br>';

$result = preg_replace_callback('/\d+/', 'h1CallBack', $string);

echo $result;
echo '<br>';
?>

<!-- 4 Užduotis -->

<h1>4 Užduotis</h1>

<?php
function whole($data){
    if ($data == floor($data)) {
        $num = 0;
        for ($i = 2; $i < $data; $i++) {
            $result = $data / $i;
            ($result == floor($result)) ? $num++ : '';
        }
    } else {
        echo 'Įvestas nesveikas skačius!';
    }
    return $num;
}
?>

<!-- 5 užduotis -->

<h1>5 Užduotis</h1>

<?php
$array = [];
$arraySorted = [];
foreach (range(0, 99) as $value) {
    $array[$value] = rand(33, 77);
}
foreach ($array as $key => $value) {
    array_push($arraySorted, whole($value));
    arsort($arraySorted);
}
echo '<pre>';
print_r($arraySorted);
?>

<!-- 6 užduotis -->

<h1>6 Užduotis</h1>

<?php
// foreach (range(0, 99) as $value) {
//     $array[$value] = rand(333, 777);
// }
?>


<!-- 7 užduotis -->

<h1>7 Užduotis</h1>

<?php
$randomRecursion = rand(10, 30);

function randomRecursion() {

    $array7 = [];
    $atsitikt = rand(10, 20);

    for ($i = 0; $i < $atsitikt; $i++) {
        array_push($array7, rand(0, 10));
    }

    $arrayLast = array_key_last($array7);
    return $finalArray = $array7[$arrayLast] = [];
}
randomRecursion();
print_r(randomRecursion());

?>