<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SellersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('sellers')->insert([
            'name' => 'seller',
            'username' => 'seller',
            'password' => Hash::make('seller'),
            'email' => 'seller@gmail.com',
            'photo' => 'seller'
        ]);
    }
}
