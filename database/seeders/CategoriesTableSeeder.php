<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Mảng các danh mục mẫu
        $categories = [
            ['name' => 'Books', 'slug' => 'books', 'image' => null, 'parent_id' => null, 'description' => 'A variety of books', 'status' => 'active'],
            ['name' => 'Electronics', 'slug' => 'electronics', 'image' => 'electronics.jpg', 'parent_id' => null, 'description' => 'Electronic gadgets and devices', 'status' => 'active'],
            ['name' => 'Clothing', 'slug' => 'clothing', 'image' => 'clothing.jpg', 'parent_id' => null, 'description' => 'Latest fashion trends', 'status' => 'active'],
            ['name' => 'Home & Garden', 'slug' => 'home-garden', 'image' => 'home-garden.jpg', 'parent_id' => null, 'description' => 'Furniture and gardening supplies', 'status' => 'active'],
        ];

        // Thêm dữ liệu vào bảng categories
        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'slug' => Str::slug($category['slug']),
                'image' => $category['image'],
                'parent_id' => $category['parent_id'],
                'description' => $category['description'],
                'status' => $category['status'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
