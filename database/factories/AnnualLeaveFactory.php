<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AnnualLeave;
use Faker\Generator as Faker;

$factory->define(AnnualLeave::class, function (Faker $faker) {
    $startDate = $faker->dateTimeBetween('+1 month', '+2 month');
    $endDate = $faker->dateTimeBetween($startDate, '+3 month');
    return [
        'start_date' => $startDate,
        'end_date' => $endDate,
        'reason' => $faker->text(),
        'status' => $faker->randomElement(['pending', 'approved', 'rejected']),
    ];
});
