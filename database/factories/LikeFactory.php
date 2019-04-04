<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Like::class, function (Faker $faker) {
    return [
        'user_id' => \App\User::all()->random()
    ];
});
