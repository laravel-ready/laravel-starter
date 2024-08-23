<?php

namespace Database\Seeders\Local\User;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultUsers = [
            [
                'email' => 'super_admin@example.com',
                'name' => 'Super Admin Madmin',
                // 'username' => 'superAdmin',
            ],
            [
                'email' => 'admin@example.com',
                'name' => 'Admin Madmin',
                // 'username' => 'admin',
            ],
            [
                'email' => 'user@example.com',
                'name' => 'User Muser',
                // 'username' => 'userMuser',
            ],
        ];

        foreach ($defaultUsers as $user) {
            if (User::where('email', $user['email'])->count() === 0) {
                User::create([
                    'email' => $user['email'],
                    'name' => $user['name'],
                    'email_verified_at' => now(),
                    // 'username' => $user['username'],
                    'password' => Hash::make($user['email']),
                ]);
            }
        }
    }
}
