<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->truncate();

        $products = DB::table('products')->pluck('id');
        $categories = DB::table('categories')->pluck('id');

        foreach ($products as $productId) {
            $selectedCategories = $categories->random(rand(1, 3))->toArray(); // Chọn từ 1 đến 3 danh mục ngẫu nhiên

            foreach ($selectedCategories as $categoryId) {
                DB::table('category_product')->insert([
                    'product_id' => $productId,
                    'category_id' => $categoryId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
