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
            'category_id' => 1,
            'title' => 'Pizza de Mussarela',
            'picture' => 'http://leoztech.com/imgs/products/pizza-mussarela1.jpg',
            'description' => "MOLHO DE TOMATE E MUSSARELA (2 CAMADAS)",
            'price' => 28.00,
            'half_to_half' => true,
            'status' => 1
        ]);

        DB::table('products')->insert([
            'establishment_id' => 4,
            'category_id' => 1,
            'title' => 'Pizza de Calabresa',
            'picture' => 'http://leoztech.com/imgs/products/calabresa1.jpg',
            'description' => "MOLHO DE TOMATE, MUSSARELA E CALABRESA",
            'price' => 28.00,
            'half_to_half' => true,
            'status' => 1
        ]);

        DB::table('products')->insert([
            'establishment_id' => 4,
            'category_id' => 1,
            'title' => 'Pizza de Portuguesa',
            'picture' => 'http://leoztech.com/imgs/products/pizza-portuguesa.jpg',
            'description' => "MOLHO DE TOMATE, PRESUNTO, MUSSARELA, OVOS, CEBOLA E AZEITONAS",
            'price' => 32.00,
            'half_to_half' => true,
            'status' => 1
        ]);

        DB::table('products')->insert([
            'establishment_id' => 4,
            'category_id' => 1,
            'title' => 'Pizza de Quatro Queijos',
            'picture' => 'http://leoztech.com/imgs/products/quatro-queijos.jpg',
            'description' => "MOLHO DE TOMATE, MUSSARELA, PROVOLONE, PARMESÃO E CATUPIRY",
            'price' => 36.00,
            'half_to_half' => true,
            'status' => 1
        ]);

        DB::table('products')->insert([
            'establishment_id' => 4,
            'category_id' => 1,
            'title' => 'Pizza de Marguerita',
            'picture' => 'http://leoztech.com/imgs/products/marguerita.jpg',
            'description' => "MOLHO DE TOMATE, TOMATES, PARMESÃO, MANJERICÃO, AZEITE DE OLIVA E MUSSARELA",
            'price' => 29.00,
            'half_to_half' => true,
            'status' => 1
        ]);
    }
}
