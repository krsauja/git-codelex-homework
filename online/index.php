<?php

require_once './app/Person.php'; // absolūta addrese (require_once '/app/Person.php) ;
require_once './app/Fruit.php'; // relatīva addrese | absolūta addrese (require_once '/app/Fruit.php)

use app;

$person = new Person('Kristiāns');
var_dump($person->getName());

$fruit = new Fruit('Bananna');
var_dump($fruit->getName());