<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 5; $i++){
            DB::table('transactions')->insert([
                'user_id' => $faker -> numberBetween(1, 5),
                'date' => $faker -> dateTime(),
                'total' => $faker -> numberBetween(5, 15),
                'pay_total' => $faker -> numberBetween(20000, 100000)
            ]);
        }
    }
}
