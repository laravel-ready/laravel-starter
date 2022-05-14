<?php

namespace Database\Seeders\User;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;

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
