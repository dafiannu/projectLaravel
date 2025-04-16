<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=1; $i <=5; $i++){
            DB::table('transaction_details')->insert ([
                // 'id' => $faker->numberBetween(1, 5),
                'transaction_id' => $faker -> numberBetween(1, 5),
                'item_id' => $faker -> numberBetween(1, 5),
                'qty' => $faker->numberBetween(5, 15),
                'subtotal' => $faker->numberBetween(10, 30)
            ]);
        }
    }
}
