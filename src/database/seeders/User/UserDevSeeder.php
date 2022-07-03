<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserDevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $targetCount = 1000;

        if (User::count() < $targetCount) {
            User::factory()->count($targetCount)->create();
        }
    }
}
