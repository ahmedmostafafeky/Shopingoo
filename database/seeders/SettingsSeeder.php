<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('settings')->insert([
            'site_title' => 'Shopingoo', 
            'site_logo' => 'Shopingoo', 
            'fav_icon' => 'Shopingoo', 
            'meta_description' => 'Shopingoo', 
            'copy_rights' => 'Shopingoo', 
            'email' => 'Shopingoo@gmail.com', 
            'phone'  => '010123456789', 
            'address'  => 'Shopingoo street', 
            'twitter_link'  => 'Shopingoo', 
            'facebook_link'  => 'Shopingoo'
        ]);
    }
}
