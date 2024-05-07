<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        

        DB::table('products')->insert([
            'name'=>'Product Name 1',
            'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
            'price'=>'50',
            'cost' => '20',
            'photo'=>'products/cOlcNxvQF832WMBY0fwzT6Wo4Wk3WDAs5gJjm3ze.webp',
            'category_id'=>'1',
            'seller_id'=>NULL,
            'admin_id'=>'1',
            'created_at'=>'2024-04-15 08:54:41',
            'updated_at'=>'2024-04-28 16:08:04',
            'amount'=>'21',
            'deleted_at'=>NULL
        ] );
            
                        
            
        DB::table('products')->insert([
            'name'=>'Product Name 2',
            'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
            'price'=>'100',
            'cost' => '20',
            'photo'=>'products/FUjCQscI50oiR4O1fYDFhbHA9Mn5TH8temYP1GeS.webp',
            'category_id'=>'2',
            'seller_id'=>NULL,
            'admin_id'=>'1',
            'created_at'=>'2024-04-15 08:55:47',
            'updated_at'=>'2024-04-15 08:55:47',
            'amount'=>'20',
            'deleted_at'=>NULL
            ] );
            
                        
            
        DB::table('products')->insert([
            'name'=>'Product Name 3',
            'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
            'price'=>'50',
            'cost' => '20',
            'photo'=>'products/cOlcNxvQF832WMBY0fwzT6Wo4Wk3WDAs5gJjm3ze.webp',
            'category_id'=>'3',
            'seller_id'=>NULL,
            'admin_id'=>'1',
            'created_at'=>'2024-04-15 08:54:41',
            'updated_at'=>'2024-04-15 08:54:41',
            'amount'=>'20',
            'deleted_at'=>NULL
            ] );
            
                        
            
        DB::table('products')->insert([
            'name'=>'Product Name 4',
            'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
            'price'=>'100',
            'cost' => '20',
            'photo'=>'products/FUjCQscI50oiR4O1fYDFhbHA9Mn5TH8temYP1GeS.webp',
            'category_id'=>'4',
            'seller_id'=>NULL,
            'admin_id'=>'1',
            'created_at'=>'2024-04-15 08:55:47',
            'updated_at'=>'2024-04-15 08:55:47',
            'amount'=>'20',
            'deleted_at'=>NULL
            ] );
            
                        
            
        DB::table('products')->insert([
            'name'=>'Product Name 5',
            'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
            'price'=>'50',
            'cost' => '20',
            'photo'=>'products/cOlcNxvQF832WMBY0fwzT6Wo4Wk3WDAs5gJjm3ze.webp',
            'category_id'=>'5',
            'seller_id'=>NULL,
            'admin_id'=>'1',
            'created_at'=>'2024-04-15 08:54:41',
            'updated_at'=>'2024-04-15 08:54:41',
            'amount'=>'20',
            'deleted_at'=>NULL
            ] );
            
                        
            
        DB::table('products')->insert([
            'name'=>'Product Name 6',
            'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
            'price'=>'100',
            'cost' => '20',
            'photo'=>'products/FUjCQscI50oiR4O1fYDFhbHA9Mn5TH8temYP1GeS.webp',
            'category_id'=>'6',
            'seller_id'=>NULL,
            'admin_id'=>'1',
            'created_at'=>'2024-04-15 08:55:47',
            'updated_at'=>'2024-04-15 08:55:47',
            'amount'=>'20',
            'deleted_at'=>NULL
            ] );
            
                        
            
        DB::table('products')->insert([
            'name'=>'Product Name 7',
            'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
            'price'=>'50',
            'cost' => '20',
            'photo'=>'products/cOlcNxvQF832WMBY0fwzT6Wo4Wk3WDAs5gJjm3ze.webp',
            'category_id'=>'7',
            'seller_id'=>NULL,
            'admin_id'=>'1',
            'created_at'=>'2024-04-15 08:54:41',
            'updated_at'=>'2024-04-15 08:54:41',
            'amount'=>'20',
            'deleted_at'=>NULL
            ] );
            
                        
            
        DB::table('products')->insert([
            'name'=>'Product Name 8',
            'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
            'price'=>'100',
            'cost' => '20',
            'photo'=>'products/FUjCQscI50oiR4O1fYDFhbHA9Mn5TH8temYP1GeS.webp',
            'category_id'=>'8',
            'seller_id'=>NULL,
            'admin_id'=>'1',
            'created_at'=>'2024-04-15 08:55:47',
            'updated_at'=>'2024-04-15 08:55:47',
            'amount'=>'20',
            'deleted_at'=>NULL
            ] );
            
                        
            
        DB::table('products')->insert([
            'name'=>'Product Name 9',
            'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
            'price'=>'50',
            'cost' => '20',
            'photo'=>'products/cOlcNxvQF832WMBY0fwzT6Wo4Wk3WDAs5gJjm3ze.webp',
            'category_id'=>'9',
            'seller_id'=>NULL,
            'admin_id'=>'1',
            'created_at'=>'2024-04-15 08:54:41',
            'updated_at'=>'2024-04-15 08:54:41',
            'amount'=>'20',
            'deleted_at'=>NULL
            ] );

        DB::table('products')->insert([
                'name'=>'Product Name 10',
                'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
                'price'=>'100',
                'cost' => '20',
                'photo'=>'products/FUjCQscI50oiR4O1fYDFhbHA9Mn5TH8temYP1GeS.webp',
                'category_id'=>'10',
                'seller_id'=>NULL,
                'admin_id'=>'1',
                'created_at'=>'2024-04-15 08:55:47',
                'updated_at'=>'2024-04-15 08:55:47',
                'amount'=>'20',
                'deleted_at'=>NULL
                ] );
                
                            
                
        DB::table('products')->insert([
                'name'=>'Product Name 11',
                'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
                'price'=>'50',
                'cost' => '20',
                'photo'=>'products/cOlcNxvQF832WMBY0fwzT6Wo4Wk3WDAs5gJjm3ze.webp',
                'category_id'=>'11',
                'seller_id'=>NULL,
                'admin_id'=>'1',
                'created_at'=>'2024-04-15 08:54:41',
                'updated_at'=>'2024-04-15 08:54:41',
                'amount'=>'20',
                'deleted_at'=>NULL
                ] );
                
                            
                
        DB::table('products')->insert([
                'name'=>'Product Name 12',
                'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
                'price'=>'100',
                'cost' => '20',
                'photo'=>'products/FUjCQscI50oiR4O1fYDFhbHA9Mn5TH8temYP1GeS.webp',
                'category_id'=>'12',
                'seller_id'=>NULL,
                'admin_id'=>'1',
                'created_at'=>'2024-04-15 08:55:47',
                'updated_at'=>'2024-04-15 08:55:47',
                'amount'=>'20',
                'deleted_at'=>NULL
                ] );
                
                            
                
        DB::table('products')->insert([
                'name'=>'Product Name 13',
                'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
                'price'=>'50',
                'cost' => '20',
                'photo'=>'products/cOlcNxvQF832WMBY0fwzT6Wo4Wk3WDAs5gJjm3ze.webp',
                'category_id'=>'13',
                'seller_id'=>NULL,
                'admin_id'=>'1',
                'created_at'=>'2024-04-15 08:54:41',
                'updated_at'=>'2024-04-15 08:54:41',
                'amount'=>'20',
                'deleted_at'=>NULL
                ] );
                
                            
                
        DB::table('products')->insert([
                'name'=>'Product Name 14',
                'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
                'price'=>'100',
                'cost' => '20',
                'photo'=>'products/FUjCQscI50oiR4O1fYDFhbHA9Mn5TH8temYP1GeS.webp',
                'category_id'=>'14',
                'seller_id'=>NULL,
                'admin_id'=>'1',
                'created_at'=>'2024-04-15 08:55:47',
                'updated_at'=>'2024-04-15 08:55:47',
                'amount'=>'20',
                'deleted_at'=>NULL
                ] );
                
                            
                
        DB::table('products')->insert([
                'name'=>'Product Name 15',
                'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
                'price'=>'50',
                'cost' => '20',
                'photo'=>'products/cOlcNxvQF832WMBY0fwzT6Wo4Wk3WDAs5gJjm3ze.webp',
                'category_id'=>'15',
                'seller_id'=>NULL,
                'admin_id'=>'1',
                'created_at'=>'2024-04-15 08:54:41',
                'updated_at'=>'2024-04-15 08:54:41',
                'amount'=>'20',
                'deleted_at'=>NULL
                ] );
                
                            
                
        DB::table('products')->insert([
                'name'=>'Product Name 16',
                'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
                'price'=>'100',
                'cost' => '20',
                'photo'=>'products/FUjCQscI50oiR4O1fYDFhbHA9Mn5TH8temYP1GeS.webp',
                'category_id'=>'16',
                'seller_id'=>NULL,
                'admin_id'=>'1',
                'created_at'=>'2024-04-15 08:55:47',
                'updated_at'=>'2024-04-15 08:55:47',
                'amount'=>'20',
                'deleted_at'=>NULL
                ] );
                
                            
                
        DB::table('products')->insert([
                'name'=>'Product Name 17',
                'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
                'price'=>'50',
                'cost' => '20',
                'photo'=>'products/cOlcNxvQF832WMBY0fwzT6Wo4Wk3WDAs5gJjm3ze.webp',
                'category_id'=>'17',
                'seller_id'=>NULL,
                'admin_id'=>'1',
                'created_at'=>'2024-04-15 08:54:41',
                'updated_at'=>'2024-04-15 08:54:41',
                'amount'=>'20',
                'deleted_at'=>NULL
                ] );
                               
                
        DB::table('products')->insert([
                'name'=>'Product Name 18',
                'description'=>'Product Name Product Name Product Name Product Name Product Name Product Name Product Name',
                'price'=>'100',
                'cost' => '20',
                'photo'=>'products/FUjCQscI50oiR4O1fYDFhbHA9Mn5TH8temYP1GeS.webp',
                'category_id'=>'18',
                'seller_id'=>'1',
                'admin_id'=>NULL,
                'created_at'=>'2024-04-15 08:55:47',
                'updated_at'=>'2024-04-15 08:55:47',
                'amount'=>'20',
                'deleted_at'=>NULL
                ] );
    }
}
