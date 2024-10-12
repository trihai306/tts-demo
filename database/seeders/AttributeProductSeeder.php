<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('product_attributes')->truncate();
        DB::table('attributes')->truncate();


        // Insert sample attribute for Size
        $attributeId = DB::table('attributes')->insertGetId([
            'name' => 'Size',
            'type' => 'dropdown',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $productIds = DB::table('products')->pluck('id'); // Replace with actual product IDs from your products table

        // Array of size values
        $sizeValues = ['S', 'M', 'L', 'XL'];



        // Insert sample product attributes for a random number of sizes for each product
        foreach ($productIds as $productId) {
            // Randomly determine the number of sizes to assign (1 to 4)
            $numberOfSizes = rand(1, 4);

            shuffle($sizeValues);

            // Shuffle sizeValues array and take the first $numberOfSizes elements
            $randomSizes = array_slice($sizeValues, 0, $numberOfSizes);

            foreach ($randomSizes as $size) {
                DB::table('product_attributes')->insert([
                    'product_id' => $productId,
                    'attribute_id' => $attributeId,
                    'value' => $size, // Insert the selected size value
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

}
