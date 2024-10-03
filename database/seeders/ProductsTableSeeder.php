<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Concurrency;
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
        $faker = Faker::create();

        $totalRecords = 10000;
        $batchSize = 1000; // Size of each batch

        // Use Concurrency to handle multiple batches
        $batches = array_fill(0, ceil($totalRecords / $batchSize), null);

        Concurrency::run(array_map(function ($_, $index) use ($faker, $batchSize, $totalRecords) {
            $products = [];
            for ($i = 0; $i < $batchSize; $i++) {
                $id = $index * $batchSize + $i;
                if ($id >= $totalRecords) break; // Stop if the calculated ID exceeds total records

                $productName = $faker->unique()->words(3, true);
                $urlKey = Str::slug($productName) . '-' . $id;
                $sku = 'SKU-demo' . str_pad($id, 7, '0', STR_PAD_LEFT);

                $products[] = [
                    'name' => $productName,
                    'url_key' => $urlKey,
                    'sku' => $sku,
                    'tax_category' => $faker->randomElement(['Stationery', 'Art Supplies', 'Electronics']),
                    'brand' => $faker->company,
                    'short_description' => $faker->sentence,
                    'description' => $faker->paragraph,
                    'meta_title' => $productName . ' for Sale',
                    'meta_keywords' => $faker->words(5, true),
                    'meta_description' => $faker->sentence,
                    'price' => $faker->randomFloat(2, 10, 100),
                    'special_price' => $faker->optional()->randomFloat(2, 5, 90),
                    'special_price_from' => $faker->optional()->date(),
                    'special_price_to' => $faker->optional()->date(),
                    'quantity' => $faker->numberBetween(10, 200),
                    'length' => $faker->randomFloat(2, 1, 100),
                    'width' => $faker->randomFloat(2, 1, 100),
                    'height' => $faker->randomFloat(2, 1, 100),
                    'weight' => $faker->randomFloat(2, 0.1, 50),
                    'status' => $faker->boolean,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            // Insert batch
            DB::table('products')->insert($products);
        }, $batches, array_keys($batches)));

        // Reset unique generation for Faker
        $faker->unique(true);
    }
}
