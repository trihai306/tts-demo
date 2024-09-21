<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (User::where('email', 'admin@example.com')->count() === 0) {
            DB::table('users')->insert([
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'phone' => '1234567890',
                'password' => Hash::make('password'),
                'type' => 'admin',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
        $this->call([
//            Adm::class,
            ProductsTableSeeder::class,
        ]);
//        UserFactory::new()->count(10000)->create();
//        NotificationFactory::new()->count(1000)->create();

        //        $this->call([
        //            RolesTableSeeder::class,
        //            PermissionsTableSeeder::class,
        //            UserRolesTableSeeder::class,
        //        ]);
    }
}
