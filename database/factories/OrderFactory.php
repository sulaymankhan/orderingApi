<?php

use Faker\Generator as Faker;
use App\Vendor;
$factory->define(App\Order::class, function (Faker $faker) {
	$faker->local = 'en_AU';

    return [
        'pickup_address_1'=>'283 Alfred Street',
        'pickup_suburb'=>'North Sydney',
        'pickup_postcode'=>'2060',
        'delivery_address_1'=>'144 pitt Street',
        'delivery_suburb'=>'Sydney',
        'delivery_postcode'=>'2000'
       

    ];
});
