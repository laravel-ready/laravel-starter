<?php

namespace Database\Seeders;

use Database\Seeders\Local\User\DefaultUserSeeder;
use Database\Seeders\Local\User\UserSeeder;
use Illuminate\Database\Seeder;

class DevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // user
            DefaultUserSeeder::class,
            UserSeeder::class,
        ]);
    }
}
