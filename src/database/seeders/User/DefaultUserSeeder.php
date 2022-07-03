<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Seeder;

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

            if (! $user) {
                User::factory()->count(1)->create([
                    'name' => 'Administrator',
                    'email' => $defaultUser,
                    'email_verified_at' => now(),
                ]);
            }
        }
    }
}
