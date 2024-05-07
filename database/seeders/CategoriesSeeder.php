<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            'name'=>'Fashion1',
            'slug'=>'This-is-Fashion',
            'description'=>'This is the category of fashion and clothes',
            'created_at'=>'2024-04-15 08:43:13',
            'updated_at'=>'2024-04-28 16:04:35',
            'photo'=>'categories/wRMhgvhvelDYbxsLPEWK6u3uOftmYrEMbKAJSm8M.webp',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('categories')->insert([
            'name'=>'Casual T-Shirts',
            'slug'=>'This-Is-Casual-T-Shirts',
            'description'=>'This Is Casual T-Shirts for mens and womens',
            'created_at'=>'2024-04-15 08:44:12',
            'updated_at'=>'2024-04-15 08:44:12',
            'photo'=>'categories/maC1WEeUSE8Fa7UcbHD3hF5MDtYSYYgvr8YTBKmM.webp',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('categories')->insert([
            'name'=>'Formal Shirts',
            'slug'=>'This-Is-Formal-Shirts',
            'description'=>'This Is Formal Shirts For Classic or something',
            'created_at'=>'2024-04-15 08:45:41',
            'updated_at'=>'2024-04-15 08:45:41',
            'photo'=>'categories/tOa1msJ4OKZXzzZAQOJNvImoImA4RxVz32OSAVQ9.webp',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('categories')->insert([
            'name'=>'Jackets',
            'slug'=>'This-Is-Jackets',
            'description'=>'This-Is-Jackets_description_and Just Loren Text Or any Thing',
            'created_at'=>'2024-04-15 08:46:45',
            'updated_at'=>'2024-04-15 08:46:45',
            'photo'=>'categories/RH9NKjT1arq09YQZPyjmWyT5VPJ1quN2tj8oLpz4.webp',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('categories')->insert([
            'name'=>'Electronics',
            'slug'=>'This-Is-Electorincs',
            'description'=>'Electronics This-Is-Electorincs This-Is-Electorincs',
            'created_at'=>'2024-04-15 08:47:46',
            'updated_at'=>'2024-04-15 08:47:46',
            'photo'=>'categories/rjIKSJzmegCnibCkE6Bdi3DP2wk036SRlcJo9mEf.webp',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('categories')->insert([
            'name'=>'Laptops',
            'slug'=>'This-is-Laptops',
            'description'=>'This-is-Laptops This-is-Laptops This-is-Laptops This-is-Laptops This-is-Laptops',
            'created_at'=>'2024-04-15 08:48:50',
            'updated_at'=>'2024-04-15 08:48:50',
            'photo'=>'categories/Gc7F75Y7MbKHYXVzlVvGCdZg6d0petupjHHmVZsz.webp',
            'deleted_at'=>NULL
        ] );
            
                        
        DB::table('categories')->insert([
            'name'=>'Fashion 2',
            'slug'=>'This-is-Fashion1',
            'description'=>'This is the category of fashion and clothes',
            'created_at'=>'2024-04-15 08:43:13',
            'updated_at'=>'2024-04-15 08:43:13',
            'photo'=>'categories/wRMhgvhvelDYbxsLPEWK6u3uOftmYrEMbKAJSm8M.webp',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('categories')->insert([
            'name'=>'Casual T-Shirts 2',
            'slug'=>'This-Is-Casual-T-Shirts1',
            'description'=>'This Is Casual T-Shirts for mens and womens',
            'created_at'=>'2024-04-15 08:44:12',
            'updated_at'=>'2024-04-15 08:44:12',
            'photo'=>'categories/maC1WEeUSE8Fa7UcbHD3hF5MDtYSYYgvr8YTBKmM.webp',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('categories')->insert([
            'name'=>'Formal Shirts 2',
            'slug'=>'This-Is-Formal-Shirts1',
            'description'=>'This Is Formal Shirts For Classic or something',
            'created_at'=>'2024-04-15 08:45:41',
            'updated_at'=>'2024-04-15 08:45:41',
            'photo'=>'categories/tOa1msJ4OKZXzzZAQOJNvImoImA4RxVz32OSAVQ9.webp',
            'deleted_at'=>NULL
        ] );
            
                        
        DB::table('categories')->insert([
            'name'=>'Jackets 2',
            'slug'=>'This-Is-Jackets1',
            'description'=>'This-Is-Jackets_description_and Just Loren Text Or any Thing',
            'created_at'=>'2024-04-15 08:46:45',
            'updated_at'=>'2024-04-15 08:46:45',
            'photo'=>'categories/RH9NKjT1arq09YQZPyjmWyT5VPJ1quN2tj8oLpz4.webp',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('categories')->insert([
            'name'=>'Electronics 2',
            'slug'=>'This-Is-Electorincs1',
            'description'=>'Electronics This-Is-Electorincs This-Is-Electorincs',
            'created_at'=>'2024-04-15 08:47:46',
            'updated_at'=>'2024-04-15 08:47:46',
            'photo'=>'categories/rjIKSJzmegCnibCkE6Bdi3DP2wk036SRlcJo9mEf.webp',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('categories')->insert([
            'name'=>'Laptops 2',
            'slug'=>'This-is-Laptops1',
            'description'=>'This-is-Laptops This-is-Laptops This-is-Laptops This-is-Laptops This-is-Laptops',
            'created_at'=>'2024-04-15 08:48:50',
            'updated_at'=>'2024-04-15 08:48:50',
            'photo'=>'categories/Gc7F75Y7MbKHYXVzlVvGCdZg6d0petupjHHmVZsz.webp',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('categories')->insert([
            'name'=>'Fashion 3',
            'slug'=>'This-is-Fashion2',
            'description'=>'This is the category of fashion and clothes',
            'created_at'=>'2024-04-15 08:43:13',
            'updated_at'=>'2024-04-15 08:43:13',
            'photo'=>'categories/wRMhgvhvelDYbxsLPEWK6u3uOftmYrEMbKAJSm8M.webp',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('categories')->insert([
            'name'=>'Casual T-Shirts 3',
            'slug'=>'This-Is-Casual-T-Shirts2',
            'description'=>'This Is Casual T-Shirts for mens and womens',
            'created_at'=>'2024-04-15 08:44:12',
            'updated_at'=>'2024-04-15 08:44:12',
            'photo'=>'categories/maC1WEeUSE8Fa7UcbHD3hF5MDtYSYYgvr8YTBKmM.webp',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('categories')->insert([
            'name'=>'Formal Shirts 3',
            'slug'=>'This-Is-Formal-Shirts2',
            'description'=>'This Is Formal Shirts For Classic or something',
            'created_at'=>'2024-04-15 08:45:41',
            'updated_at'=>'2024-04-15 08:45:41',
            'photo'=>'categories/tOa1msJ4OKZXzzZAQOJNvImoImA4RxVz32OSAVQ9.webp',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('categories')->insert([
            'name'=>'Jackets 3',
            'slug'=>'This-Is-Jackets2',
            'description'=>'This-Is-Jackets_description_and Just Loren Text Or any Thing',
            'created_at'=>'2024-04-15 08:46:45',
            'updated_at'=>'2024-04-15 08:46:45',
            'photo'=>'categories/RH9NKjT1arq09YQZPyjmWyT5VPJ1quN2tj8oLpz4.webp',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('categories')->insert([
            'name'=>'Electronics 3',
            'slug'=>'This-Is-Electorincs2',
            'description'=>'Electronics This-Is-Electorincs This-Is-Electorincs',
            'created_at'=>'2024-04-15 08:47:46',
            'updated_at'=>'2024-04-15 08:47:46',
            'photo'=>'categories/rjIKSJzmegCnibCkE6Bdi3DP2wk036SRlcJo9mEf.webp',
            'deleted_at'=>NULL
        ] );
            
                        
        DB::table('categories')->insert([
            'name'=>'Laptops 3',
            'slug'=>'This-is-Laptops2',
            'description'=>'This-is-Laptops This-is-Laptops This-is-Laptops This-is-Laptops This-is-Laptops',
            'created_at'=>'2024-04-15 08:48:50',
            'updated_at'=>'2024-04-15 08:48:50',
            'photo'=>'categories/Gc7F75Y7MbKHYXVzlVvGCdZg6d0petupjHHmVZsz.webp',
            'deleted_at'=>NULL
        ] );
    }
}
