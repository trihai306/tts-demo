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
        $faker = Faker::create();

        for ($i = 0; $i < 10000; $i++) {  // Adjust the loop to generate the number of records you need
            $product = DB::table('products')->insert([
                'name' => $productName = $faker->words(3, true),
                'url_key' => Str::slug($productName),
                'sku' => $faker->unique()->bothify('SKU###???'),
                'tax_category' => $faker->randomElement(['Stationery', 'Art Supplies', 'Electronics']),
                'brand' => $faker->company,
                'short_description' => $faker->sentence,
                'description' => $faker->paragraph,
                'meta_title' => $productName . ' for Sale',
                'meta_keywords' => $faker->words(5, true),
                'meta_description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 10, 100),
                'special_price' => $faker->randomElement([null, $faker->randomFloat(2, 5, 90)]),
                'special_price_from' => $faker->randomElement([null, $faker->date]),
                'special_price_to' => $faker->randomElement([null, $faker->date]),
                'quantity' => $faker->numberBetween(10, 200),
                'length' => $faker->randomFloat(2, 1, 100),
                'width' => $faker->randomFloat(2, 1, 100),
                'height' => $faker->randomFloat(2, 1, 100),
                'weight' => $faker->randomFloat(2, 0.1, 50),
                'status' => $faker->boolean,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            $media_product = DB::table('file_managers')->insert([
                'model_id' => $product,
                'collection_name' => 'default',
                'file_name' => 'product.jpg',
                'file_path' => 'product.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'public',
                'size' => 1024,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
