<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'id' => Str::uuid(),
            'role_id' => '0865fe87-fd05-11ef-ba53-5811223a0998', // admin role
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'first_name' => 'Admin',
            'last_name' => 'User',
            'address_id' => Str::uuid(),
        ]);

        User::create([
            'id' => Str::uuid(),
            'role_id' => '0866108f-fd05-11ef-ba53-5811223a0998', // user role
            'email' => 'user@example.com',
            'password' => Hash::make('password123'),
            'first_name' => 'John',
            'last_name' => 'Doe',
            'address_id' => Str::uuid(),
        ]);
    }
}
