<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MethodpaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('methodpays')->insert([
            'name' => 'Paypal',
        ]);

        DB::table('methodpays')->insert([
            'name' => 'Stripe',
        ]);

        DB::table('methodpays')->insert([
            'name' => 'Wallet',
        ]);
    }
}
