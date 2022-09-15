<?php
require 'classes/Animals.php';

use AnimalsClass\Animals;

$animals = new Animals();

echo 'Первая неделя';
echo $animals->cow.' коров'.PHP_EOL;
echo $animals->chicken.' куриц'.PHP_EOL;

$animals->for();

$animals->setCow(1);
$animals->setChicken(5);
echo 'Вторая неделя';
echo $animals->cow.' коров'.PHP_EOL;
echo $animals->chicken.' куриц'.PHP_EOL;

$animals->for();





