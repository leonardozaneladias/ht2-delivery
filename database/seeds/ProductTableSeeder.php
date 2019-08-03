<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'establishment_id' => 4,
            'category_id' => rand(4),
            'title' => 'Pizza de Mussarela',
            'picture' => 'http://leoztech.com/imgs/products/pizza-mussarela1.jpg',
            'description' => "blablablalbal",
            'price' => 28.00,
            'half_to_half' => true,
            'status' => 1
        ]);

        DB::table('products')->insert([
            'establishment_id' => 4,
            'category_id' => rand(1,5),
            'title' => 'Pizza de Calabresa',
            'picture' => 'http://leoztech.com/imgs/products/calabresa1.jpg',
            'description' => "blablablalbal",
            'price' => 28.00,
            'half_to_half' => true,
            'status' => 1
        ]);

        DB::table('products')->insert([
            'establishment_id' => 4,
            'category_id' => rand(1,5),
            'title' => 'Pizza de Portuguesa',
            'picture' => 'http://leoztech.com/imgs/products/pizza-portuguesa.jpg',
            'description' => "blablablalbal",
            'price' => 32.00,
            'half_to_half' => true,
            'status' => 1
        ]);

        DB::table('products')->insert([
            'establishment_id' => 4,
            'category_id' => rand(1,5),
            'title' => 'Pizza de Quatro Queijos',
            'picture' => 'http://leoztech.com/imgs/products/quatro-queijos.jpg',
            'description' => "blablablalbal",
            'price' => 36.00,
            'half_to_half' => true,
            'status' => 1
        ]);

        DB::table('products')->insert([
            'establishment_id' => 4,
            'category_id' => rand(1,5),
            'title' => 'Pizza de Marguerita',
            'picture' => 'http://leoztech.com/imgs/products/marguerita.jpg',
            'description' => "blablablalbal",
            'price' => 29.00,
            'half_to_half' => true,
            'status' => 1
        ]);
    }
}
