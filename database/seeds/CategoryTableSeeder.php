<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Pizza'
        ]);

        DB::table('categories')->insert([
            'name' => 'Pizza Doce'
        ]);

        DB::table('categories')->insert([
            'name' => 'Esfiha'
        ]);

        DB::table('categories')->insert([
            'name' => 'Lanches'
        ]);

        DB::table('categories')->insert([
            'name' => 'Bebidas'
        ]);
    }
}
