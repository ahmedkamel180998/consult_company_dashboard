<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(['email' => 'user@example.com'], [
            'name' => 'User',
            'email_verified_at' => now(),
            'password' => bcrypt('password123'),
        ]);
    }
}
