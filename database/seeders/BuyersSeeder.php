<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BuyersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('buyers')->insert([
            'name' => 'buyer',
            'username' => 'buyer',
            'password' => Hash::make('buyer'),
            'email' => 'buyer@gmail.com',
            'photo' => 'buyer'
        ]);
    }
}
