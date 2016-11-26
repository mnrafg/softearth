<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Container\Container;

// Create an instace of Capsule Manager
$capsule = new Capsule(new Container);

if (!is_readable($databaseFile)) {
	touch($databaseFile);
}

// Configure the Capsule Manager
$capsule->addConnection([
    'driver'    => 'sqlite',
    'database'  => $databaseFile,
]);

// Return the capsule
return $capsule;