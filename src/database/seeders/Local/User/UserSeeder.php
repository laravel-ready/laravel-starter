<?php

namespace Database\Seeders\Local\User;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $targetCount = 100;

        if (User::count() < $targetCount) {
            User::factory()->count($targetCount)->create();
        }
    }
}
