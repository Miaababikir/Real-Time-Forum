<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Reply::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'question_id' => \App\Model\Question::all()->random(),
        'user_id' => \App\User::all()->random(),
    ];
});
