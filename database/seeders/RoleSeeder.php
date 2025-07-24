<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create roles (if not already exist)
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // 2. Create a specific admin user (if not already created)
        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],  // Check if user already exists
            [
                'name' => 'Admin',
                'password' => Hash::make('password'), // You can change password
            ]
        );

        // 3. Assign the admin role
        if (!$admin->hasRole('admin')) {
            $admin->assignRole($adminRole);
        }
    }
}