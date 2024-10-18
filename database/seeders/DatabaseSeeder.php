<?php

namespace Database\Seeders;

use Adminftr\Core\Http\Models\Notification;
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
//        $this->call([
//            Adm::class,
//            ProductsTableSeeder::class,
//        ]);
        $users = User::all();
        foreach ($users as $user) {
            for ($i = 0; $i < 100; $i++) {
                Notification::create([
                    'type' => 'App\Notifications\SampleNotification',
                    'notifiable_type' => get_class($user),
                    'notifiable_id' => $user->id,
                    'sender' => $user->id, // Assuming sender is also the user for this example
                    'title' => 'Welcome Notification',
                    'description' => 'This is a sample notification for user ' . $user->name,
                    'data' => json_encode([
                        'message' => 'Welcome to our platform! We are glad to have you here.',
                        'action_url' => url('/home'),
                    ]),
                    'read_at' => null,
                ]);
            }

        }

        $this->call([
            CategorySeeder::class,
            ProductsTableSeeder::class,
            AttributeProductSeeder::class,
        ]);
    }
}
