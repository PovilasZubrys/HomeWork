<!-- 1 užduotis -->

<h1>1 užduotis</h1>

<?php
$array1 = [];
foreach (range(0, 9) as $array1) {
    foreach(range(0, 4) as $value) {
        $array[$array1][] = rand(5, 25);
    }
}
echo '<pre>';
print_r($array);
?>

<!-- 2 užduotis -->

<h1>2 užduotis</h1>
<h2>A)</h2>

<?php
$countArray = 0;
foreach ($array as $value) {
    foreach ($value as $n) {
        ($n < 10) ? $countArray++ : '';
    }
}
echo $countArray;
?>

<h2>B)</h2>

<?php
$maxArray = [];
foreach ($array as $value) {
    foreach ($value as $n) {
    array_push($maxArray, $n);
    $max = max($maxArray);
    }
}
echo $max;
?>

<h2>C)</h2>

<?php
for ($i=0; $i < 5; $i++) { 
    echo "$i suma: ", array_sum(array_column($array, "$i")), "<br>";
}

// $sumArray1 = $sumArray2 = $sumArray3 = $sumArray4 = $sumArray5 = [];
// $rez1 = $rez2 = $rez3 = $rez4 = $rez5 = 0;
// foreach ($array as $value) {
//     foreach ($value as $key => $val) {
//         ($key === 0) ? array_push($sumArray1, $val) : '';
//         ($key === 1) ? array_push($sumArray2, $val) : '';
//         ($key === 2) ? array_push($sumArray3, $val) : '';
//         ($key === 3) ? array_push($sumArray4, $val) : '';
//         ($key === 4) ? array_push($sumArray5, $val) : '';
//     }
// }
// for($i = 0; $i < count($sumArray1); $i++) {
//     $rez1 += $sumArray1[$i];
//     $rez2 += $sumArray2[$i];
//     $rez3 += $sumArray3[$i];
//     $rez4 += $sumArray4[$i];
//     $rez5 += $sumArray5[$i];
// }
// echo "Index 0 suma: $rez1<br>";
// echo "Index 1 suma: $rez2<br>";
// echo "Index 2 suma: $rez3<br>";
// echo "Index 3 suma: $rez4<br>";
// echo "Index 4 suma: $rez5<br>";
?>

<h2>D)</h2>

<?php
foreach ($array as $key => $indx) {
    foreach (range(0, 1) as $value) {
        $array[$key][] = rand(5, 25);
    }
}
print_r($array);
?>

<h2>E)</h2>

<?php
foreach ($array as $key => $value) {
    $sum = array_sum($value);
}
// print_r($sum);
print_r($value)
?>