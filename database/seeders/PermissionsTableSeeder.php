<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100000; $i++) {
            DB::table('permissions')->insert([
                'name' => $faker->word . '_' . $i, // Append the loop index to the word
                'guard_name' => 'web', // Add this line
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
