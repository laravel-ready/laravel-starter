<?php

namespace Database\Seeders\User;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultUser = 'admin@example.com';

        if (User::count() === 0) {
            $user = User::where(['email' => $defaultUser])->first();

            if (!$user) {
                User::factory()->count(1)->create([
                    'name' => 'Administrator',
                    'email' => $defaultUser,
                    'email_verified_at' => now(),
                ]);
            }
        }
    }
}
