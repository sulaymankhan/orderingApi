<?php

use Faker\Generator as Faker;

$factory->define(App\Vendor::class, function (Faker $faker) {
    return [
        'company_name'=>$faker->company,
        'average_processing_time'=>$faker->numberBetween(600,2000)
    ];
});
