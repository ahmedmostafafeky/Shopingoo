<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('user_infos')->insert([
            'buyer_id' => 1,
            'seller_id' => null,
            'admin_id' => null ,
            'number' => "01098367311",
            'address' => "cairo maddi egypt",
            'dob' => Carbon::now(),
        ]);

        DB::table('user_infos')->insert([
            'buyer_id' => null,
            'seller_id' => 1,
            'admin_id' => null ,
            'number' => "01098367311",
            'address' => "cairo maddi egypt",
            'dob' => Carbon::now(),
        ]);

        DB::table('user_infos')->insert([
            'buyer_id' => null,
            'seller_id' => null,
            'admin_id' => 1 ,
            'number' => "01098367311",
            'address' => "cairo maddi egypt",
            'dob' => Carbon::now(),
        ]);
    }


 	
}
