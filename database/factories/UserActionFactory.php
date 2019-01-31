<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\Auth\UserAction::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'token' => \App\Utils\TokenGenerator::generate(),
        'action' => \App\Models\Auth\UserAction::ACTIVATE_ACCOUNT
    ];
});