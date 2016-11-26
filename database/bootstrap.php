<?php

use Illuminate\Database\Capsule\Manager as Capsule;

// Create an instace of Capsule Manager
$capsule = new Capsule;

if (!is_readable($databaseFile)) {
	touch($databaseFile);
}

// Configure the Capsule Manager
$capsule->addConnection([
    'driver'    => 'sqlite',
    'database'  => $databaseFile,
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods...
$capsule->setAsGlobal();

// Return the capsule
return $capsule;
