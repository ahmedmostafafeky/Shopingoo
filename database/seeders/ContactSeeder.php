<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('contacts')->insert([
            'address' => "maddi cairo egypt",
            'phone' => "01098367311",
            'email' => "ahmedmostafafeky@gmail.com",	
            'working' => "8-4",
            'location' => "here or there link",
        ]);

    }
}
