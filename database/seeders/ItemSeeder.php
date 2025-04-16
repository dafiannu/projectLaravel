<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i=1; $i <=5; $i++){
            DB::table('items')->insert ([
                'category_id' => $faker -> numberBetween(1, 5),
                'name' => $faker -> name(), 
                'price' => $faker -> numberBetween(10000, 50000),
                'stock' => $faker -> numberBetween(5, 15)
            ]);
        } 
    }
}
