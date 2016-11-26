<?php

use Illuminate\Database\Capsule\Manager as Capsule;

// Use Capsule Manager to create the database schema
Capsule::schema()->create('states', function ($table) {
    $table->increments('id');
    $table->string('name', 60);
    $table->integer('country_id')->unsigned();
    $table->timestamps();

    $table->foreign('country_id')->references('id')->on('countries');
});

Capsule::schema()->table('countries', function ($table) {
    $table->foreign('state_id')->references('id')->on('states');
});
