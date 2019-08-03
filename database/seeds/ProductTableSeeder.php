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
        factory(App\Models\Product::class, 100)->create()->each(function ($user) {
//            $user->posts()->save(factory(App\Post::class)->make());
        });
    }
}
