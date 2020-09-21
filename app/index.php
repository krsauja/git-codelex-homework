<?php

require_once "Choice/Spices.php";
require_once "Choice/Salt.php";
require_once "Choice/Pepper.php";

use app\Choice\{Salt, Pepper};

$spices = [
    new Salt(),
    new Pepper(),
];

foreach ($spices as $spice) {
    echo '" ' . $spice->getToTell() . ' "' . "\n";
}
