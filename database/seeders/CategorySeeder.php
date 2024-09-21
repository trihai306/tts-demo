<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define parent categories
        $parentCategories = [
            'Electronics' => 'Various electronic devices and gadgets.',
            'Books' => 'All kinds of books and literary works.',
            'Home & Garden' => 'Items for home improvement and gardening.',
        ];

        foreach ($parentCategories as $name => $description) {
            $parent = Category::create([
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => $description
            ]);

            // Creating some child categories for each parent
            for ($i = 1; $i <= 3; $i++) {
                Category::create([
                    'name' => $name . ' Subcategory ' . $i,
                    'slug' => Str::slug($name . ' Subcategory ' . $i),
                    'parent_id' => $parent->id, // Assigning the parent ID to the child categories
                    'description' => 'A subcategory of ' . $name
                ]);
            }
        }
    }
}
