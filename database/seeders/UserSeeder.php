<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin1234'),
        ]);

        User::create([
            'name' => 'user1',
            'email' => 'juan@example.com',
            'password' => Hash::make('password123'),
        ]);

        User::create([
            'name' => 'user2',
            'email' => 'ana@example.com',
            'password' => Hash::make('secret456'),
        ]);
    }
}
