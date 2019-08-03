<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'establishment_id' => rand(1,4),
        'category_id' => rand(1,5),
        'title' => $faker->company,
        'description' => $faker->text(50),
        'price' => $faker->numberBetween(18, 49),
        'half_to_half' => false,
        'status' => 1
    ];


//    $table->unsignedBigInteger('establishment_id');
//    $table->foreign('establishment_id')->references('id')->on('establishments');
//    $table->string('title');
//    $table->string('description');
//    $table->decimal('price');
//    $table->boolean('half_to_half');
//    $table->tinyInteger('status');
});
