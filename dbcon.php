<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
->withServiceAccount('smoothiesdb-firebase-adminsdk-p45u7-c25b08e31d.json')
->withDatabaseUri('https://smoothiesdb-default-rtdb.firebaseio.com/');//firebase database url

$database = $factory->createDatabase();//initializing firebase database

?>