<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate the products table
        DB::table('products')->truncate();

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $imagePaths = [
            "shop/product/1.png",
            "shop/product/2.png",
            "shop/product/3.png",
            "shop/product/4.png",
            "shop/product/5.png",
            "shop/product/6.png",
            "shop/product/7.png",
            "shop/product/8.png",
            "shop/product/9.png",
            "shop/product/10.png",
            "shop/product/11.png",
            "shop/product/12.png",
        ];

        $faker = Faker::create();
        $totalRecords = 1000;
        $batchSize = 100; // Size of each batch

        // Chunk data insertion for better performance
        for ($batch = 0; $batch < ceil($totalRecords / $batchSize); $batch++) {
            $products = [];

            for ($i = 0; $i < $batchSize; $i++) {
                $id = $batch * $batchSize + $i;
                if ($id >= $totalRecords) break;

                $productName = $faker->unique()->words(3, true);
                $urlKey = Str::slug($productName) . '-' . $id;
                $sku = 'SKU-demo' . str_pad($id, 7, '0', STR_PAD_LEFT);

                $products[] = [
                    'name' => $productName,
                    'image' => $imagePaths[array_rand($imagePaths)],
                    'url_key' => $urlKey,
                    'sku' => $sku,
                    'tax_category' => $faker->randomElement(['Stationery', 'Art Supplies', 'Electronics']),
                    'id_brand' => rand(1, 100),
                    'short_description' => $faker->sentence,
                    'description' => $faker->paragraph,
                    'meta_title' => $productName . ' for Sale',
                    'meta_keywords' => $faker->words(5, true),
                    'meta_description' => $faker->sentence,
                    'price' => $faker->randomFloat(2, 10, 100),
                    'special_price' => $faker->optional()->randomFloat(2, 5, 90),
                    'special_price_from' => $faker->optional()->dateTimeBetween('2024-01-01', '2024-12-31'),
                    'special_price_to' => $faker->optional()->dateTimeBetween('2025-01-01', '2025-12-31'),
                    'quantity' => $faker->numberBetween(10, 200),
                    'length' => $faker->randomFloat(2, 1, 100),
                    'width' => $faker->randomFloat(2, 1, 100),
                    'height' => $faker->randomFloat(2, 1, 100),
                    'weight' => $faker->randomFloat(2, 0.1, 50),
                    'quantity_sold' => rand(1, 100),
                    'status' => $faker->boolean,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            // Insert products in chunks
            DB::table('products')->insert($products);
        }

        // Reset unique generation for Faker
        $faker->unique(true);
    }
}
