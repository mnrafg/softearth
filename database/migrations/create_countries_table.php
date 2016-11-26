<?php

use Illuminate\Database\Capsule\Manager as Capsule;

// Use Capsule Manager to create the database schema
Capsule::schema()->create('countries', function ($table) {
    $table->increments('id');
    $table->string('code');
    $table->string('isd', 3);
    $table->string('name', 60)->unique();
    $table->unsignedInteger('currency')->nullable();
    $table->unsignedInteger('flag')->nullable()->unique();
    $table->string('timezone');
    $table->unsignedInteger('capital')->nullable()->unique();
    $table->timestamps();
});