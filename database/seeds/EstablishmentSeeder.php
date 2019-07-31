<?php

use Illuminate\Database\Seeder;

class EstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('establishments')->insert([
            'name' => 'UNIDADE Imperador',
            'cep' => '03933070',
            'address' => 'Av. Luís Pires de Minas',
            'number' => '497',
            'image' => 'assets/img/restaurants/restaurant02.jpg',
            'limit' => '6000',
            'time_to_delivery' => '30',
            'longitude' => '-23.590832',
            'latitude' => '-46.5087045',
        ]);

        DB::table('establishments')->insert([
            'name' => 'UNIDADE BAIRREIRA GRANDE',
            'cep' => '03909000',
            'address' => 'Rua Tuma Maluly',
            'number' => '250',
            'image' => 'assets/img/restaurants/restaurant04.jpg',
            'limit' => '5000',
            'time_to_delivery' => '30',
            'longitude' => '-23.569422',
            'latitude' => '-46.518693',
        ]);

        DB::table('establishments')->insert([
            'name' => 'UNIDADE VILA RICA',
            'cep' => '03911000',
            'address' => 'Av. Inconfidência Mineira',
            'number' => '246',
            'image' => 'assets/img/restaurants/restaurant09.jpg',
            'limit' => '7500',
            'time_to_delivery' => '20',
            'longitude' => '-23.5832669',
            'latitude' => '-46.5190825',
        ]);
    }
}
