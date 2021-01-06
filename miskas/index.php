<?php

echo 'Miškas';

include __DIR__.'/Miskas.php';

include __DIR__.'/Vovere.php';
include __DIR__.'/Lape.php';

$animal1 = new Lape;
$animal2 = new Vovere;

echo '<pre>';
// var_dump($animal1);
// var_dump($animal2);

// $animal1->makeNoise();
// $animal2->makeNoise();
// var_dump($animal2->getArea());