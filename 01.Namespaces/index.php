<?php
require __DIR__ . '/vendor/autoload.php';

Use Rych\Random\Random;
echo (new Random())->getRandomInteger(1, 5);
// echo (new Rych\Random\Random())->getRandomInteger(1, 5);