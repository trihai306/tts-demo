<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class UserRolesTableSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $roles = Role::all();
        $permissions = Permission::all();

        foreach ($users as $user) {
            // Assign random roles to user
            $user->roles()->attach(
                $roles->random(rand(1, 3))->pluck('id')->toArray()
            );

            // Assign random permissions to each role of user
            foreach ($user->roles as $role) {
                $role->permissions()->attach(
                    $permissions->random(rand(1, 5))->pluck('id')->toArray()
                );
            }
        }
    }
}
